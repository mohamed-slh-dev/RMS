<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\District;
use App\Models\Package;
use App\Models\MealType;
use App\Models\DeliveryTime;
use App\Models\Component;
use App\Models\Customer;
use App\Models\CustomerDelivery;
use App\Models\CustomerExclude;
use App\Models\CustomerMeal;
use App\Models\CustomerPayment;
use App\Models\CustomerSubscription;
use App\Models\CustomerChat;
use App\Models\DeliveryCompany;
use App\Models\DeliveryCompanyDistrict;
use App\Models\DeliveryCompanyDriver;
use App\Models\DeliveryCompanyDriverDistrict;
use App\Models\DriverDistrict;
use App\Models\PackagePlan;
use App\Models\PackagePlanMeal;
use App\Models\PackageMeal;
use App\Models\UserDistrict;
use App\Models\User;
use App\Models\Margin;
use App\Models\DaysOff;
use App\Models\CustomerFeedback;
use App\Models\CustomerFreez;
use App\Models\RestaurantMealPlan;
use App\Models\Notification;



use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{


    // customers page
   public function customers()
   {

      $customers = Customer::all();

      $freezs = CustomerFreez::all();

      // depenedencies
      $packages = Package::all();
      

      $types = MealType::all();

      return view('admins.customers.index', compact('customers', 'packages','types','freezs'));
      
   }



    // ==============================




    // create customer page (actually its a separate tab)
    public function create()
    {
      $packages = Package::all();

      
      // package price with its id
      $packagePrice = array();
      $packageName = array();

      $packageCals = array();
      $packageProteins = array();
      $packageCarbs = array();
      $packageFats = array();

      foreach ($packages as $package) {

         $packagePrice[$package->id] = $package->price;
         $packageName[$package->id] = $package->name;

         $packageCals[$package->id] = $package->cals;
         $packageProteins[$package->id] = $package->proteins;
         $packageCarbs[$package->id] = $package->carbs;
         $packageFats[$package->id] = $package->fats;

      }

      // dependencies for summary
      $marginclone = Margin::find(1);
      
      // tmpmargin
      $margin = array();
      $margin[0] = $marginclone->margin;
      $margin[1] = $marginclone->operation;


      $cities = City::all();
      $districts = District::all();

      // dependencies for summary
      $cityCharge = array();
      $cityName = array();

      foreach ($cities as $city) {
         $cityCharge[$city->id] = $city->charge;
         $cityName[$city->id] = $city->name;

      }
      

      
      $types  = MealType::all();

      // dependencies for summary
      $typeName = array();
      foreach ($types as $type) {

         $typeName[$type->id] = $type->name;

      }




      $timings  = DeliveryTime::all();


      // dependencies for summary
      $timingArray = array();
      foreach ($timings as $timing) {

         $timingArray[$timing->id] = $timing->timing;
      }



      $components  = Component::all();

      $start_date = date('Y-m-d', strtotime(Date('Y-m-d'). ' + 2 days'));

      $offdays = DaysOff::all();

      $off_days_array = array ();
      foreach ($offdays as $day) {
        $off_days_array[$day->name] = 1;
      }


      return view('admins.customers.create',compact('packages','cities','districts','types','timings','components','start_date', 'packagePrice', 'packageName', 'typeName', 'margin', 'cityCharge', 'cityName', 'timingArray', 'packageCals', 'packageProteins', 'packageCarbs', 'packageFats','off_days_array'));
      
    }






   //  ----------------
   

    public function signup()
    {
      $packages = Package::all();


      // package price with its id
      $packagePrice = array();
      $packageName = array();

      $packageCals = array();
      $packageProteins = array();
      $packageCarbs = array();
      $packageFats = array();

      foreach ($packages as $package) {

         $packagePrice[$package->id] = $package->price;
         $packageName[$package->id] = $package->name;

         $packageCals[$package->id] = $package->cals;
         $packageProteins[$package->id] = $package->proteins;
         $packageCarbs[$package->id] = $package->carbs;
         $packageFats[$package->id] = $package->fats;
      }


      // dependencies for summary
      $marginclone = Margin::find(1);

      // tmpmargin
      $margin = array();
      $margin[0] = $marginclone->margin;
      $margin[1] = $marginclone->operation;


      $cities = City::all();
      $districts = District::all();

      // dependencies for summary
      $cityCharge = array();
      $cityName = array();

      foreach ($cities as $city) {
         $cityCharge[$city->id] = $city->charge;
         $cityName[$city->id] = $city->name;
      }



      $types  = MealType::all();

      // dependencies for summary
      $typeName = array();
      foreach ($types as $type) {

         $typeName[$type->id] = $type->name;
      }




      $timings  = DeliveryTime::all();


      // dependencies for summary
      $timingArray = array();
      foreach ($timings as $timing) {

         $timingArray[$timing->id] = $timing->timing;
      }



      $components  = Component::all();

      $start_date = date('Y-m-d', strtotime(Date('Y-m-d') . ' + 2 days'));

      $offdays = DaysOff::all();

      $off_days_array = array ();
      foreach ($offdays as $day) {
        $off_days_array[$day->name] = 1;
      }


      $meals_plan = RestaurantMealPlan::all();

        return view('customers.signup.index',compact('packages','cities','districts','types','timings','components', 'start_date', 'packagePrice', 'packageName', 'typeName', 'margin', 'cityCharge', 'cityName', 'timingArray', 'packageCals', 'packageProteins', 'packageCarbs', 'packageFats','off_days_array','meals_plan'));
    }
    // ==============================





    // edit customer page
   public function edit($id)
   {

      $customer = Customer::find($id);


      //  dependencies
      $cities = City::all();
      $districts = District::all(); 
      $components = Component::all();

      $packages = Package::all();

      $users = User::all();

      $types = MealType::all();

      
      $renew_start_date =  date('Y-m-d', strtotime($customer->to_date. ' + 1 days'));

      return view('admins.customers.edit', compact('customer', 'cities', 'districts', 'components','users','id','packages','renew_start_date','types'));
   } 

   public function addFeedback(Request $request, $id)
   {
      $feedback = new CustomerFeedback();
      $feedback->customer_id = $id;
      $feedback->rating  = $request->rating;
      $feedback->date  = $request->date;
      $feedback->subject  = $request->subject;
      
      $feedback->save();

      return redirect()->back();

   }

   // update customer
   public function update($id, Request $request)
   {

      $customer = Customer::find($id);


      // get updating info
      $customer->fname = $request->fname;
      $customer->lname = $request->lname;
      $customer->address = $request->address;
      $customer->phone = $request->phone;
      $customer->city_id = $request->city;
      $customer->district_id = $request->district;
      $customer->flat_number = $request->flat;
      $customer->block_number = $request->block;

      $customer->manager_id = $request->manager;

      $customer->save();

      // update excludes
      if ($request->excludes) {


         // delete old excludes
         $oldexcludes = CustomerExclude::where('customer_id', $customer->id)->delete();

         // add new excludes
         for ($i=0; $i < count($request->excludes); $i++) { 

            $newexclude = new CustomerExclude();
            $newexclude->customer_id = $customer->id;
            $newexclude->component_id = $request->excludes[$i];

            $newexclude->save();

         } //end for loop


      } //end if there's excludes


      // if empty delete all excludes if exists
      else {

         // delete old excludes
         $oldexcludes = CustomerExclude::where('customer_id', $customer->id)->delete();

      }

     


      return redirect()->back()->with('success', 'Customer Updated Successfully');
      
   }

    // ==============================

    
   // customer chat
   public function customerChat() {


      $customers = Customer::all();


      return view('admins.customers.chat', compact('customers'));
   }







   // customer chat (open specific chat )
   public function customerChatActive($id) {

      $activeId = $id;
      $customers = Customer::all();


      return view('admins.customers.chat', compact('customers', 'activeId'));
   }








    
   // ---------------------

    // send message
   public function sendMessage(Request $request)
   {


      // get customer
      $newMessage = new CustomerChat();

      // info
      $newMessage->customer_id = $request->customerid;
      $newMessage->type = 'admin';
      $newMessage->message = $request->message;

      $newMessage->save();


      // redo
      $activeId = $request->customerid;
      $customers = Customer::all();

      
      return view('admins.customers.chat', compact('customers', 'activeId'));


   }   



    // ==============================
    
    


    public function createCustomer(Request $request)
    {

       //dd($request);
      $customer = new Customer();

      
      $customer->fname = $request->fname;
      $customer->lname = $request->lname;
      $customer->phone = $request->phone;
      $customer->gender = $request->gender;
      $customer->birthdate = $request->dateofbirth;
      $customer->height = $request->height;
      $customer->weight = $request->weight;
      $customer->activity = $request->activity;
      $customer->email = $request->email;
      $customer->password =  Hash::make($request->password);
      $customer->address = $request->address;
      $customer->block_number = $request->block;
      $customer->floor = $request->floor;
      $customer->flat_number = $request->flat;
      $customer->email = $request->email;
      $customer->city_id = $request->city;
      $customer->district_id = $request->district;
      $customer->from_date = $request->from;
    
      $customer->delivery_time_id = $request->delivery_time;
      $customer->package_id = $request->customer_package;
      $customer->note = $request->modal_note;
      $customer->cutlery =  $request->cutlery;

      //get all days off
      $daysoff = DaysOff::all();

      //check if there is manager on his district
      $manager_id = UserDistrict::where('district_id',$request->district)->first();

      if ($manager_id) {
         $customer->manager_id =  $manager_id->user_id;
      }
    

      $customer_days = array();

      $customer_delivery_days = "";

      if ($request->saturday) {
          $customer_days['Sat'] = 1;
          $customer_delivery_days .= 'Sat,';
      } else {
        $customer_days['Sat'] = 0;
      }

      
      if ($request->sunday) {
        $customer_days['Sun'] = 1;
        $customer_delivery_days .= 'Sun,';
     } else {
        $customer_days['Sun'] = 0;
     }

     if ($request->monday) {
        $customer_days['Mon'] = 1;
        $customer_delivery_days .= 'Mon,';
     } else {
        $customer_days['Mon'] = 0;
     }

     if ($request->tuesday) {
        $customer_days['Tue'] = 1;
        $customer_delivery_days .= 'Tue,';
     } else {
        $customer_days['Tue'] = 0;
     }

     
     if ($request->wednesday) {
        $customer_days['Wed'] = 1;
        $customer_delivery_days .= 'Wed,';
     } else {
        $customer_days['Wed'] = 0;
     }

     if ($request->thursday) {
        $customer_days['Thu'] = 1;
        $customer_delivery_days .= 'Thu,';
     } else {
        $customer_days['Thu'] = 0;
     }

     if ($request->friday) {
        $customer_days['Fri'] = 1;
        $customer_delivery_days .= 'Fri,';
     } else {
        $customer_days['Fri'] = 0;
     }

   
     $customer->delivery_days = $customer_delivery_days;

     $save_customer = $customer->save();

     
     $customer_payment = new CustomerPayment();

     $customer_payment->customer_id = $customer->id;
     $customer_payment->card_number = $request->card_number;
     $customer_payment->security_code  = $request->cvv;
     $customer_payment->expiration = $request->expiration_date;
     $customer_payment->paypal_email  = $request->paybal_email;

     $customer_payment->save();

    

    

      if ($request->excludes) {

         foreach ($request->excludes as $exclude) {
            $customer_excludes = new CustomerExclude();
            $customer_excludes->customer_id = $customer->id;
            $customer_excludes->component_id = $exclude;
            $customer_excludes->save();
         }

      }




     

     
      
      if ($save_customer) {
         
         $current_date = ($request->from);


         //dd( $diff_days );
         $diff_days2 = $request->daysplan;

        for ($i=0; $i < $diff_days2  ; $i++) { 
          
            $day = date('D', strtotime($current_date));
           // dd($customer_days[$day]);
             if ($customer_days[$day] == 1) {
               
                 $customer_delivery_day = new CustomerDelivery();

                 $driver_id = DriverDistrict::where('district_id',$request->district)->first();
   
                 $company_id = DeliveryCompanyDistrict::where('district_id', $request->district)->first();
                 
               
                 if ($driver_id) {
                  $customer_delivery_day->driver_id = $driver_id->driver_id;
                  $delivery_city = City::find($request->city);

                  $delivery_charge = $delivery_city->charge;

                 }elseif($company_id){
                  $customer_delivery_day->delivery_company_id = $company_id->delivery_company_id;
                  $delivery_company = DeliveryCompany::find($company_id->delivery_company_id);

                  $delivery_company_drivers  = DeliveryCompanyDriver::where('delivery_company_id', $delivery_company->id)->get('id');

                  $delivery_driver = DeliveryCompanyDriverDistrict::where('district_id',$request->district)
                  ->whereIn('driver_id', $delivery_company_drivers)->first();

                  if ($delivery_driver) {
                     $customer_delivery_day->delivery_company_driver_id = $delivery_driver->driver_id;

                  }
                  if ($request->city == 1) {
                     $delivery_charge = $delivery_company->dubai_charge;
                  } elseif ($request->city == 2) {
                     $delivery_charge = $delivery_company->abudhabi_charge;

                  }elseif ($request->city == 3) {
                     $delivery_charge = $delivery_company->sharjah_charge;

                  }elseif ($request->city == 4) {
                     $delivery_charge = $delivery_company->ajman_charge;

                  }elseif ($request->city == 5) {
                     $delivery_charge = $delivery_company->ummalquwain_charge ;

                  }elseif ($request->city == 6) {
                     $delivery_charge = $delivery_company->alain_charge ;

                  }elseif ($request->city == 7) {
                     $delivery_charge = $delivery_company->rak_charge;

                  }
                  

                 } else {
                  $delivery_city = City::find($request->city);
                  $delivery_charge = $delivery_city->charge;

                 }
 
                 $customer_delivery_day->customer_id = $customer->id;
                 $customer_delivery_day->date = $current_date;
                 $customer_delivery_day->status = 'not delivered';


                 $customer_delivery_day->save();




               //   ------------ customer meals

               $customer_meals = new CustomerMeal();
               $meal_types = MealType::all();

              
               $customer_selected_meals = array();
               if ($request->choose_meals_plan == 'plans') {
                  $plan = RestaurantMealPlan::find($request->plan_id);
                
                  foreach ($plan->planMeals as $plan_meal) {
                   $customer_selected_types [$plan_meal->mealType->name]=$plan_meal->meal_type_id ; 
                  
                  }
               } else {
                
                  foreach ($meal_types as $type){
      
                     $type_name = $type->name;
      
                     if ($request->$type_name) {
                        $customer_selected_types[$type_name]=$type->id ;  
                       
                     }
                    
                  }
                
               }

               $customer_package_plan = PackagePlan::where('package_id',$request->customer_package)->where('date',$current_date)->first();
               

               // if there's a plan 
               if ($customer_package_plan) {

                  foreach ($customer_selected_types as $customer_types) {
                     

                     $package_plan_meal = PackagePlanMeal::where('package_plan_id', $customer_package_plan->id)->where('meal_type_id',$customer_types)->where('default','true')->first();

                     if ($package_plan_meal) {
                        $customer_meals = new CustomerMeal();
                        $customer_meals->customer_id = $customer->id;
                        $customer_meals->date = $current_date;
                        $customer_meals->status = 'not started';
                        $customer_meals->meal_type_id = $customer_types;
                        $customer_meals->package_plan_meal_id  = $package_plan_meal->id;

                        
                        $customer_meals->save();
                     } else {
                        $customer_meals = new CustomerMeal();
                        $customer_meals->customer_id = $customer->id;
                        $customer_meals->date = $current_date;
                        $customer_meals->status = 'not started';
                        $customer_meals->meal_type_id = $customer_types;
                        
                        $customer_meals->save();
                     }
                  }
                  // End foreach customer selected types
               
               }else{

               foreach ($meal_types as $type) {
                  $type_name = $type->name;
                  // dd($request->$type_name);
                  if (array_key_exists($type_name, $customer_selected_types)) {

                     $customer_meals = new CustomerMeal();
                     $customer_meals->customer_id = $customer->id;
                     $customer_meals->date = $current_date;
                     $customer_meals->status = 'not started';
                     $customer_meals->meal_type_id = $type->id;
                     

                     $customer_meals->save();
                  }
               }
                  
               }
               
            
               $current_date = date('Y-m-d', strtotime($current_date. ' + 1 days'));
            }else{
               $i--;
               $current_date = date('Y-m-d', strtotime($current_date. ' + 1 days'));
               }
                       
        }

       
      }
   

      
    
     $this_customer = Customer::find($customer->id);

     $end_date =  date('Y-m-d', strtotime($current_date. ' - 1 days'));

     $this_customer->to_date = $end_date;
      
     $this_customer->save();

     
     $customer_subs = new CustomerSubscription();
     $customer_subs->customer_id = $customer->id;
     $customer_subs->package_id = $request->customer_package;
     $customer_subs->start_date = $request->from;
     $customer_subs->end_date = $end_date;

     $customer_package_price = 0;

     foreach ($customer_selected_types as $customer_types) {
       $package_type_price = PackageMeal::where('package_id', $request->customer_package)->where('meal_type_id',$customer_types )->sum('price');

       $customer_package_price += $package_type_price;
     }

    
     $margins = Margin::find(1);

     $charge = $request->daysplan * $delivery_charge;

     $customer_package_price += $charge;

     $meals_packing = (count($customer_selected_types) * $request->daysplan) * $margins->packing ;


     $customer_package_price += $meals_packing;

     $customer_subs->price = $customer_package_price;

     $margin_price =  ($customer_package_price *  $margins->operation / 100) + ($customer_package_price *  $margins->margin / 100);
     
     $customer_subs->margin_price = $customer_package_price + $margin_price;

     $customer_subs->save();

     $noti = new Notification();
     $noti->title = 'New Customer Added';
     $noti->desc = 'Customer '.$request->fname.' '.$request->lname.' has been added';
     $noti->url = '/admin/customers/'.$customer->id.'/edit';
     $noti->created_by = session('user_id');

     $noti->save();

      return redirect()->route('admin.customers');

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////
    //FREEZ CUSTOMER


    public function freez(Request $request)
    {
       $customer_freez = new CustomerFreez();

       $customer_freez->customer_id = $request->customer_id;
       $customer_freez->start_date = $request->start_date;
       $customer_freez->end_date = $request->end_date;
       $customer_freez->subject = $request->subject;

       $customer_freez->save();

      $customer_delivery_freezed =  CustomerDelivery::where('date', '>=' , $request->start_date)
      ->where('date', '<=' , $request->end_date)
      ->where('customer_id',$request->customer_id)
      ->update(['status' => 'freezed']);

      $customer_meals_freezed =  CustomerMeal::where('date', '>=' , $request->start_date)
      ->where('date', '<=' , $request->end_date)
      ->where('customer_id',$request->customer_id)
      ->update(['status' => 'freezed']);


      $customer_delivery_days =  CustomerDelivery::where('date', '>=' , $request->start_date)
      ->where('date', '<=' , $request->end_date)
      ->where('customer_id',$request->customer_id)
      ->get();

      $days_to_fill = $customer_delivery_days->count();

      $customer = Customer::find($request->customer_id);
      
      $customer_meals = CustomerMeal::where('customer_id',$customer->id)->distinct('meal_type_id')->get('meal_type_id');

      $customer_meals_array = array ();

      foreach ($customer_meals as $meal) {
        $customer_meals_array[$meal->mealType->name] = 1;
      }

     

       $customer_start_date = date('Y-m-d', strtotime($customer->to_date. ' + 1 days'));

       $delivery_days = explode(",",$customer->delivery_days);

       $customer_days = array();
       
       foreach ($delivery_days as $days) {
          $customer_days[$days] = 1;
       }

       if (array_key_exists('Sat', $customer_days)) {
         $customer_days['Sat'] = 1;
     } else {
       $customer_days['Sat'] = 0;
     }

     
     if (array_key_exists('Sun', $customer_days)) {
       $customer_days['Sun'] = 1;
    } else {
       $customer_days['Sun'] = 0;
    }

    if (array_key_exists('Mon', $customer_days)) {
       $customer_days['Mon'] = 1;
    } else {
       $customer_days['Mon'] = 0;
    }

    if (array_key_exists('Tue', $customer_days)) {
       $customer_days['Tue'] = 1;
    } else {
       $customer_days['Tue'] = 0;
    }

    
    if (array_key_exists('Wed', $customer_days)) {
       $customer_days['Wed'] = 1;
    } else {
       $customer_days['Wed'] = 0;
    }

    if (array_key_exists('Thi', $customer_days)) {
       $customer_days['Thu'] = 1;
    } else {
       $customer_days['Thu'] = 0;
    }

    if (array_key_exists('Fri', $customer_days)) {
       $customer_days['Fri'] = 1;
    } else {
       $customer_days['Fri'] = 0;
    }


     $from_date = $customer_start_date;

 
    for ($i=0; $i < $days_to_fill ; $i++) { 
      
        $day = date('D', strtotime($from_date));
       // dd($customer_days[$day]);
         if ($customer_days[$day] == 1) {
           
             $customer_delivery_day = new CustomerDelivery();

             $driver_id = DriverDistrict::where('district_id',$request->district)->first();

             $company_id = DeliveryCompanyDistrict::where('district_id', $request->district)->first();
             
             if ($driver_id) {
              $customer_delivery_day->driver_id = $driver_id->driver_id;
             }elseif($company_id){
              $customer_delivery_day->delivery_company_id = $company_id->delivery_company_id;
             }

             $customer_delivery_day->customer_id = $customer->id;
             $customer_delivery_day->date = $from_date;
             $customer_delivery_day->status = 'not delivered';


             $customer_delivery_day->save();




           //   ------------ customer meals

           $customer_meals = new CustomerMeal();
           $meal_types = MealType::all();

           $customer_selected_meals = array();
           $x = 0;
           foreach ($meal_types as $type){

              $type_name = $type->name;

              if (array_key_exists($type_name, $customer_meals_array)) {
                 $customer_selected_types[$x]=$type->id ;  
              }
              $x++;
           }

          // dd($customer_selected_types);

           $customer_package_plan = PackagePlan::where('package_id',$customer->package_id)->where('date',$from_date)->first();
           

           // if there's a plan 
           if ($customer_package_plan) {

              foreach ($customer_selected_types as $customer_types) {
                 
                 $package_plan_meal = PackagePlanMeal::where('package_plan_id', $customer_package_plan->id)->where('meal_type_id',$customer_types)->where('default','true')->first();

                 if ($package_plan_meal) {
                    $customer_meals = new CustomerMeal();
                    $customer_meals->customer_id = $customer->id;
                    $customer_meals->date = $from_date;
                    $customer_meals->status = 'not started';
                    $customer_meals->meal_type_id = $customer_types;
                    $customer_meals->package_plan_meal_id  = $package_plan_meal->id;

                    
                    $customer_meals->save();
                 } else {
                    $customer_meals = new CustomerMeal();
                    $customer_meals->customer_id = $customer->id;
                    $customer_meals->date = $from_date;
                    $customer_meals->status = 'not started';
                    $customer_meals->meal_type_id = $customer_types;
                    
                    $customer_meals->save();
                 }
              }
              // End foreach customer selected types
           
           }else{

           foreach ($meal_types as $type) {
              $type_name = $type->name;
              // dd($request->$type_name);
              if (array_key_exists($type_name, $customer_meals_array)) {

                 $customer_meals = new CustomerMeal();
                 $customer_meals->customer_id = $customer->id;
                 $customer_meals->date = $from_date;
                 $customer_meals->status = 'not started';
                 $customer_meals->meal_type_id = $type->id;
                 

                 $customer_meals->save();
              }
           }
              
           }
           
        
        
           $from_date = date('Y-m-d', strtotime($from_date. ' + 1 days'));
        }else{
           $i--;
           $from_date = date('Y-m-d', strtotime($from_date. ' + 1 days'));
           }
                   
    }

    $end_date = date('Y-m-d', strtotime($from_date. ' - 1 days'));
    $customer->to_date = $end_date;
    $customer->save();
      

    return redirect()->back();


    }

    //////////////////////////////////////////////////////////////////////////////////////

    //RENEW FUNCTION
    public function renew(Request $request)
    {
        $customer_days = array();

      $customer_delivery_days = "";

      if ($request->saturday) {
          $customer_days['Sat'] = 1;
          $customer_delivery_days .= 'Sat,';
      } else {
        $customer_days['Sat'] = 0;
      }

      
      if ($request->sunday) {
        $customer_days['Sun'] = 1;
        $customer_delivery_days .= 'Sun,';
     } else {
        $customer_days['Sun'] = 0;
     }

     if ($request->monday) {
        $customer_days['Mon'] = 1;
        $customer_delivery_days .= 'Mon,';
     } else {
        $customer_days['Mon'] = 0;
     }

     if ($request->tuesday) {
        $customer_days['Tue'] = 1;
        $customer_delivery_days .= 'Tue,';
     } else {
        $customer_days['Tue'] = 0;
     }

     
     if ($request->wednesday) {
        $customer_days['Wed'] = 1;
        $customer_delivery_days .= 'Wed,';
     } else {
        $customer_days['Wed'] = 0;
     }

     if ($request->thursday) {
        $customer_days['Thu'] = 1;
        $customer_delivery_days .= 'Thu,';
     } else {
        $customer_days['Thu'] = 0;
     }

     if ($request->friday) {
        $customer_days['Fri'] = 1;
        $customer_delivery_days .= 'Fri,';
     } else {
        $customer_days['Fri'] = 0;
     }

     $customer = Customer::find($request->customer_id);

         
      $current_date = ($request->start_date);


      //dd( $diff_days );
      $diff_days2 = $request->daysplan;

     for ($i=0; $i < $diff_days2  ; $i++) { 
       
         $day = date('D', strtotime($current_date));
        // dd($customer_days[$day]);
          if ($customer_days[$day] == 1) {
            
              $customer_delivery_day = new CustomerDelivery();

              $driver_id = DriverDistrict::where('district_id',$request->district)->first();

              $company_id = DeliveryCompanyDistrict::where('district_id', $request->district)->first();
              
              if ($driver_id) {
               $customer_delivery_day->driver_id = $driver_id->driver_id;
               $delivery_city = City::find($request->city);

               $delivery_charge = $delivery_city->charge;

              }elseif($company_id){
               $customer_delivery_day->delivery_company_id = $company_id->delivery_company_id;
               $delivery_company = DeliveryCompany::find($company_id->delivery_company_id);

               
               $delivery_company_drivers  = DeliveryCompanyDriver::where('delivery_company_id', $delivery_company->id)->get('id');

               $delivery_driver = DeliveryCompanyDriverDistrict::where('district_id',$request->district)
               ->whereIn('driver_id', $delivery_company_drivers)->first();

               if ($delivery_driver) {
                  $customer_delivery_day->delivery_company_driver_id = $delivery_driver->driver_id;
               }

               if ($request->city == 1) {
                  $delivery_charge = $delivery_company->dubai_charge;
               } elseif ($request->city == 2) {
                  $delivery_charge = $delivery_company->abudhabi_charge;

               }elseif ($request->city == 3) {
                  $delivery_charge = $delivery_company->sharjah_charge;

               }elseif ($request->city == 4) {
                  $delivery_charge = $delivery_company->ajman_charge;

               }elseif ($request->city == 5) {
                  $delivery_charge = $delivery_company->ummalquwain_charge ;

               }elseif ($request->city == 6) {
                  $delivery_charge = $delivery_company->alain_charge ;

               }elseif ($request->city == 7) {
                  $delivery_charge = $delivery_company->rak_charge;

               }
               

              } else {
               $delivery_city = City::find($customer->city_id);
               $delivery_charge = $delivery_city->charge;

              }

              $customer_delivery_day->customer_id = $customer->id;
              $customer_delivery_day->date = $current_date;
              $customer_delivery_day->status = 'not delivered';


              $customer_delivery_day->save();




            //   ------------ customer meals

            $customer_meals = new CustomerMeal();
            $meal_types = MealType::all();

            $customer_selected_meals = array();

            
            $x = 0;
            foreach ($meal_types as $type){

               $type_name = $type->name;

               if ($request->$type_name) {
                  $customer_selected_types[$x]=$type->id ;  
               }
               $x++;
            }

           // dd($customer_selected_types);

            $customer_package_plan = PackagePlan::where('package_id',$request->customer_package)->where('date',$current_date)->first();
            

            // if there's a plan 
            if ($customer_package_plan) {

               foreach ($customer_selected_types as $customer_types) {
                  
                  $package_plan_meal = PackagePlanMeal::where('package_plan_id', $customer_package_plan->id)->where('meal_type_id',$customer_types)->where('default','true')->first();

                  if ($package_plan_meal) {
                     $customer_meals = new CustomerMeal();
                     $customer_meals->customer_id = $customer->id;
                     $customer_meals->date = $current_date;
                     $customer_meals->status = 'not started';
                     $customer_meals->meal_type_id = $customer_types;
                     $customer_meals->package_plan_meal_id  = $package_plan_meal->id;

                     
                     $customer_meals->save();
                  } else {
                     $customer_meals = new CustomerMeal();
                     $customer_meals->customer_id = $customer->id;
                     $customer_meals->date = $current_date;
                     $customer_meals->status = 'not started';
                     $customer_meals->meal_type_id = $customer_types;
                     
                     $customer_meals->save();
                  }
               }
               // End foreach customer selected types
            
            }else{

            foreach ($meal_types as $type) {
               $type_name = $type->name;
               // dd($request->$type_name);
               if ($request->$type_name) {

                  $customer_meals = new CustomerMeal();
                  $customer_meals->customer_id = $customer->id;
                  $customer_meals->date = $current_date;
                  $customer_meals->status = 'not started';
                  $customer_meals->meal_type_id = $type->id;
                  

                  $customer_meals->save();
               }
            }
               
            }
            
         
            $current_date = date('Y-m-d', strtotime($current_date. ' + 1 days'));
         }else{
            $i--;
            $current_date = date('Y-m-d', strtotime($current_date. ' + 1 days'));
            }
                    
     }

     $end_date  = date('Y-m-d', strtotime($current_date. ' - 1 days'));

     $customer->to_date = $end_date;
     $customer->save();


     $customer_subs = new CustomerSubscription();
     $customer_subs->customer_id = $request->customer_id;
     $customer_subs->package_id = $request->package;
     $customer_subs->start_date = $request->start_date;
     $customer_subs->end_date = $end_date;

     $meal_types = MealType::all();

     $customer_selected_meals = array();
     $y = 0;
     foreach ($meal_types as $type){

        $type_name = $type->name;

        if ($request->$type_name) {
           $customer_selected_types [$y]=$type->id ;  
        }
        $y++;
     }

     $customer_package_price = 0;

     foreach ($customer_selected_types as $customer_types) {
       $package_type_price = PackageMeal::where('package_id', $request->customer_package)->where('meal_type_id',$customer_types )->sum('price');

       $customer_package_price += $package_type_price;
     }


     ////////////
   
     $margins = Margin::find(1);

     $charge = $request->daysplan * $delivery_charge;

     $customer_package_price += $charge;

     $meals_packing = (count($customer_selected_types) * $request->daysplan) * $margins->packing ;


     $customer_package_price += $meals_packing;

     $customer_subs->price = $customer_package_price;

     $margin_price =  ($customer_package_price *  $margins->operation / 100) + ($customer_package_price *  $margins->margin / 100);
     
     $customer_subs->margin_price = $customer_package_price + $margin_price;
     /////////////

     $customer_subs->save();

     return redirect()->back();

    } 
   //  end of renew function


}
