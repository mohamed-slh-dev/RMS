<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Margin;
use App\Models\MealType;
use App\Models\OnetimeOrder;
use App\Models\OnetimeOrderMeal;
use App\Models\Order;
use App\Models\OrderMeal;
use App\Models\Package;
use App\Models\PackageMeal;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{


    // orders page
    public function orders()
    {

        // get orders
        $orders = Order::all();

        // onetime orders
        $onetimeOrders = OnetimeOrder::all();


        // depenedencies
        $packages = Package::all();
        $packageMealsOG = PackageMeal::all();
        $cities = City::all();
        $districts = District::all();


        // dependencies
        $meal_types = MealType::all();
        $meal_types_array = array();

        // copy to associative array
        foreach ($meal_types as $type) {

            $meal_types_array[$type->id] = $type->name;

        }

        // copy back to meal_types
        $meal_types = $meal_types_array;


        return view('admins.orders.index', compact('orders', 'packages', 'packageMealsOG', 'meal_types', 'cities', 'districts', 'onetimeOrders'));
    }



    // ==============================




    // create order
    public function create(Request $request) 
    {

        // get different meal types
        $breakfast = $request->input('breakfast-meal');
        $lunch = $request->input('lunch-meal');
        $dinner = $request->input('dinner-meal');
        $snack = $request->input('snack-meal');
        $postworkout = $request->input('postworkout-meal');
        $preworkout = $request->input('preworkout-meal');


        // get info after you check there's meals of some type
        if ($breakfast || $lunch || $dinner || $snack || $postworkout || $preworkout) {


            // depenedencies
            $margin = Margin::find(1);


            // create new order
            $neworder = new Order();
            
            $neworder->table = $request->table;
            $neworder->note = $request->note;
            $neworder->date = date('Y-m-d');

            $neworder->save();


            

            // breakfast meals
            if ($breakfast) {

                for ($y = 0; $y < count($breakfast); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $breakfast[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);
                
                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }



            // launch meals
            if ($lunch) {

                for ($y = 0; $y < count($lunch); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $lunch[$y];

                    $newmeal->save();


                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // dinner meals
            if ($dinner) {

                for ($y = 0; $y < count($dinner); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $dinner[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // snack meals
            if ($snack) {

                for ($y = 0; $y < count($snack); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $snack[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // postworkout meals
            if ($postworkout) {

                for ($y = 0; $y < count($postworkout); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $postworkout[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }

            // preworkout meals
            if ($preworkout) {

                for ($y = 0; $y < count($preworkout); $y++) {

                    $newmeal = new OrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $preworkout[$y];

                    $newmeal->save();


                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }





            return redirect()->back()->with('success', 'Order Added Successfully');

        } //end if



        return redirect()->back()->with('error', 'Order Not Added');
        

    } //end create
















    // ==============================




    // create order
    public function createOnetimeOrder(Request $request) 
    {


        // get different meal types
        $breakfast = $request->input('breakfast-meal');
        $lunch = $request->input('lunch-meal');
        $dinner = $request->input('dinner-meal');
        $snack = $request->input('snack-meal');
        $postworkout = $request->input('postworkout-meal');
        $preworkout = $request->input('preworkout-meal');


        // get info after you check there's meals of some type
        if ($breakfast || $lunch || $dinner || $snack || $postworkout || $preworkout) {


            // depenedencies
            $margin = Margin::find(1);


            // create new order
            $neworder = new OnetimeOrder();
            
            $neworder->customer_name = $request->name;
            $neworder->customer_phone = $request->phone;
            $neworder->customer_address = $request->address;

            $neworder->note = $request->note;
            $neworder->date = date('Y-m-d');
            $neworder->status = 'pending';


            $neworder->city_id = $request->city;
            $neworder->district_id = $request->district;
            

            $neworder->save();


            

            // breakfast meals
            if ($breakfast) {

                for ($y = 0; $y < count($breakfast); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $breakfast[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);
                
                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }



            // launch meals
            if ($lunch) {

                for ($y = 0; $y < count($lunch); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $lunch[$y];

                    $newmeal->save();


                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // dinner meals
            if ($dinner) {

                for ($y = 0; $y < count($dinner); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $dinner[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // snack meals
            if ($snack) {

                for ($y = 0; $y < count($snack); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $snack[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }


            // postworkout meals
            if ($postworkout) {

                for ($y = 0; $y < count($postworkout); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $postworkout[$y];

                    $newmeal->save();

                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }

            // preworkout meals
            if ($preworkout) {

                for ($y = 0; $y < count($preworkout); $y++) {

                    $newmeal = new OnetimeOrderMeal();

                    $newmeal->order_id = $neworder->id;
                    $newmeal->meal_id = $preworkout[$y];

                    $newmeal->save();


                    // get the price and selling price
                    $packageMeal = PackageMeal::find($newmeal->meal_id);

                    $newmeal->price = $packageMeal->price;
                    $newmeal->selling_price = $packageMeal->price + ($packageMeal->price * $margin->margin) / 100;

                    $newmeal->save();

                }
            }





            return redirect()->back()->with('success', 'Onetime Order Added Successfully');

        } //end if



        return redirect()->back()->with('error', 'Order Not Added');
        

    } //end create

}
