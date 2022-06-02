<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Component;
use App\Models\Customer;
use App\Models\CustomerChat;
use App\Models\CustomerDelivery;
use App\Models\CustomerExclude;
use App\Models\CustomerMeal;
use App\Models\CustomerPurchase;
use App\Models\District;
use App\Models\MealType;
use App\Models\PackagePlan;
use App\Models\StoreItem;
use App\Models\Package;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    

    public function login() {


        return view('customers.application.login');

    }




    // -----------

    public function checkUser(Request $request)
    {

        

        // check the user
        $email = $request->email;
        $password = $request->password;


        // get user using email
        $customer = Customer::where('email', $email)->first();

        // if found then check password (he pass)
        if ($customer && Hash::check($password, $customer->password)) {

            // put sessions
            session()->put('customer_name', $customer->fname." ".$customer->lname);

            session()->put('customer_id', $customer->id);

            // redirect to dashboard
            return redirect()->route('customer.home');


        } // end of password correct


        // he don't pass
        else {

            // redirect to login again
            return redirect()->route('customer.login');

        } //end of wrong password or user not found



    } //end checkuser method





    // ----------------------


    // logout page
    public function logout()
    {
        session()->forget('customer_name');

        session()->forget('customer_id');

        return redirect()->route('customer.login');

    }  //end logoout method






    // ------------------------------------------------



    public function home() {

        // check auth
        $exists = $this->checkAuth();

        if ($exists == 0) {
            return redirect()->route('customer.login');
            
        }


        // get customer
        $customer = Customer::find(session('customer_id'));

        // get his one delivery
        $delivery = CustomerDelivery::where('customer_id', $customer->id)->where('date', date('Y-m-d'))->first();

        return view('customers.application.index', compact('customer', 'delivery'));

    }




    // ------------------------------------------------



    public function chat() {


        $customer = Customer::find(session('customer_id'));

        $packages = Package::all();
  
        $types = MealType::all();
  
        
        $renew_start_date =  date('Y-m-d', strtotime($customer->to_date. ' + 1 days'));

        return view('customers.application.chat', compact('customer','packages','types','renew_start_date'));

    }




    // ---------------


     public function chatRoom() {


        // get customer
        $customer = Customer::find(session('customer_id'));


        // get the chat
        $chats = CustomerChat::where('customer_id', $customer->id)->get();
        

        return view('customers.application.chat-room', compact('customer', 'chats'));

    }



    // ----------------


    public function sendMessage(Request $request) {


        // get customer
        $newMessage = new CustomerChat();

        // info
        $newMessage->customer_id = session('customer_id');
        $newMessage->type = 'customer';
        $newMessage->message = $request->message;
        
        $newMessage->save();

        return redirect()->route('customer.chatRoom');

    }






    // ------------------------------------------------



    public function store() {

        // get customer
        $customer = Customer::find(session('customer_id'));


        $items = StoreItem::all();

        // get next delivery date
        $nextdelivery = CustomerDelivery::where('customer_id', $customer->id)->where('date', '>', date('Y-m-d'))->first();


        // empty always
        $todayPurchases = CustomerPurchase::where('delivery_date', '1000-1-12')->get();
        $todayCharge = 0;

        
        // next items + next Charge
        if ($nextdelivery->date) {

            $todayPurchases = CustomerPurchase::where('delivery_date', $nextdelivery->date)->get();

            foreach ($todayPurchases as $todayPurchase) {
                $todayCharge += $todayPurchase->item->price * $todayPurchase->quantity;
            }

        }
        

        return view('customers.application.store', compact('customer', 'items', 'todayPurchases', 'todayCharge'));

    }





    public function storePurchase(Request $request) {

        // get customer
        $customer = Customer::find(session('customer_id'));


        // get next delivery date
        $delivery = CustomerDelivery::where('date', '>', date('Y-m-d'))->first();
    

        
        // get checkboxes
        if ($request->itemCheckbox) {

            for ($i=0; $i < count($request->itemCheckbox); $i++) { 

                
                $newpurchase = new CustomerPurchase();

                $newpurchase->customer_id = session('customer_id');
                $newpurchase->item_id = $request->itemCheckbox[$i];
                $newpurchase->quantity = $request->quantity[$i];

                // if there's upcoming delivery
                if ($delivery) {
                    $newpurchase->delivery_date = $delivery->date;
                }

                $newpurchase->save();

            } //end for loop


            return redirect()->back()->with('success', 'Items Added Successfully');

        } //end if condition to not empty



        return redirect()->back()->with('error', 'Items Not Added');

    }


    // ------------------------------------------------



    public function plan() {


        // get customer
        $customer = Customer::find(session('customer_id'));


        // excludes
        $components = Component::all();



        // get the next three deliveries
        

        return view('customers.application.plan', compact('customer', 'components'));

    }







    // -------------

    public function planMeals($id) {


        // get plan
        $plan = PackagePlan::find($id);
        

        // get customer meal types he chose (in chosen plan day)
        $customerMeals = CustomerMeal::where('customer_id', session('customer_id'))
        ->where('date', $plan->date)->get();


        // customer
        $customerMeals = $customerMeals->unique('meal_type_id');

        // customer_meal_types_id
        $customerMealTypes = ""; //seperate by commas
        foreach ($customerMeals as $customerMeal) {

            $customerMealTypes .= $customerMeal->meal_type_id . ",";
        }






        // dependencies
        $meal_types = MealType::all();
        $meal_types_array = array();

        // copy to associative array
        foreach ($meal_types as $type) {

            $meal_types_array[$type->id] = $type->name;
        }

        // copy back to meal_types
        $meal_types = $meal_types_array;
        
        
        return view('customers.application.plan-meals', compact('plan', 'meal_types', 'customerMealTypes'));

    }








    // --------------

    public function updatePlanMeals(Request $request, $planid) {


        // get plan
        $plan = PackagePlan::find($planid);


        // get this customer (loop throu them and update the package_plan_meal_id) based on meal_type
        $customerMeals = CustomerMeal::where('customer_id', session('customer_id'))
        ->where('date', $plan->date)->get();




        // get the five meals (some might be empty) 
        // default checkboxes (always at index 0)
        $breakfast_default_checkboxes = !empty($request->input('breakfast-meal-default')) ? $request->input('breakfast-meal-default') : array();

        $lunch_default_checkboxes = !empty($request->input('lunch-meal-default')) ? $request->input('lunch-meal-default') : array();


        $dinner_default_checkboxes = !empty($request->input('dinner-meal-default')) ? $request->input('dinner-meal-default') : array();

        $snack_default_checkboxes = !empty($request->input('snack-meal-default')) ? $request->input('snack-meal-default') : array();

        $postworkout_default_checkboxes = !empty($request->input('postworkout-meal-default')) ? $request->input('postworkout-meal-default') : array();

        $preworkout_default_checkboxes = !empty($request->input('preworkout-meal-default')) ? $request->input('preworkout-meal-default') : array();

     



        // loop through customer meals
        foreach ($customerMeals as $customerMeal) {

            // breakfast meal update if found
            if ($customerMeal->meal_type_id == 1 && !empty($breakfast_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $breakfast_default_checkboxes[0];

                $customerMeal->save();


            }


            // launch meal update if found
            if ($customerMeal->meal_type_id == 2 && !empty($lunch_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $lunch_default_checkboxes[0];

                $customerMeal->save();


            }


            // dinner meal update if found
            if ($customerMeal->meal_type_id == 3 && !empty($dinner_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $dinner_default_checkboxes[0];

                $customerMeal->save();

            }


            // snack meal update if found
            if ($customerMeal->meal_type_id == 4 && !empty($snack_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $snack_default_checkboxes[0];

                $customerMeal->save();

            }


            // post meal update if found
            if ($customerMeal->meal_type_id == 5 && !empty($preworkout_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $preworkout_default_checkboxes[0];

                $customerMeal->save();

            }


            // pre meal update if found
            if ($customerMeal->meal_type_id == 6 && !empty($postworkout_default_checkboxes)) {

                $customerMeal->package_plan_meal_id = $postworkout_default_checkboxes[0];

                $customerMeal->save();
            }


        } //end foreach




        return redirect()->route('customer.plan');
    }




    // ---------------


    public function updateExcludes(Request $request) {


        // update excludes (delete all of them then add again)
        $customer = Customer::find(session('customer_id'));

        if ($customer->excludes) {

            $deleteExcludes = CustomerExclude::where('customer_id', session('customer_id'))->delete();

        }


        // add the new excludes
        if ($request->excludes) {

            for ($i = 0; $i < count($request->excludes); $i++) {

                $newExclude = new CustomerExclude();

                $newExclude->customer_id = session('customer_id');
                $newExclude->component_id = $request->excludes[$i];


                $newExclude->save();

            } //end for loop
        } //end if
        


        return redirect()->route('customer.plan');
    }



    // ------------------------------------------------



    public function profile() {

        $customer = Customer::find(session('customer_id'));

        $packages = Package::all();
  
        $types = MealType::all();
  
        
        $renew_start_date =  date('Y-m-d', strtotime($customer->to_date. ' + 1 days'));


        return view('customers.application.profile', compact('customer','packages','types','renew_start_date'));

    }


    // ---------

    public function profileEdit() {

        $customer = Customer::find(session('customer_id'));

        // dependencies
        $cities = City::all();
        $districts = District::all();

        return view('customers.application.profile-edit', compact('customer', 'cities', 'districts'));

    }


    // -----------


    public function updateProfile(Request $request) {

        $customer = Customer::find(session('customer_id'));


        // update the info
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->weight = $request->weight;
        $customer->height = $request->height;
        $customer->address = $request->address;
        $customer->block_number = $request->block;
        $customer->flat_number = $request->flat;
        $customer->city_id = $request->city;
        $customer->district_id = $request->district;



        $customer->save();

        return redirect()->back()->with('success', 'Profile Updated Successfully');

    }














    // ====================================================

    public function checkAuth() {

        
        if (!empty(session('customer_id'))) {

            return 1;

        } else {

            return 0;

        }
    }


}
