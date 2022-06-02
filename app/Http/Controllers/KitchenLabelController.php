<?php

namespace App\Http\Controllers;
use App\Models\CustomerMeal;
use App\Models\MealType;
use App\Models\Customer;

use Illuminate\Http\Request;

class KitchenLabelController extends Controller
{


    public function labels()
    {

        $customers_meals = CustomerMeal::where('date',Date('Y-m-d'))
        ->where('status', '!=' ,'cooking')
        ->where('status', '!=' ,'not started')
        ->get();
        $meal_types = MealType::all();
        $customers = Customer::all();

        return view('kitchens.labels.index',compact('customers_meals','meal_types','customers'));
    }

    public function labelsfilter(Request $request)
    {
         // filter here
         $filters = array();

         // id
         if ($request->id != null) {

            $filters["id"] = $request->id;
        }

          // status
       if ($request->type != "all") {

           $filters["meal_type_id"] = $request->type;
       }


       // dd($request->status);
       if ($request->status != "all") {

           $filters["status"] = $request->status;
       }
       

        $customers_meals = CustomerMeal::where('date',Date('Y-m-d'))
        ->where('status', '!=' ,'cooking')
        ->where('status', '!=' ,'not started')
        ->where($filters)
        ->get();

        $meal_types = MealType::all();
        
        $customers = Customer::all();

        return view('kitchens.labels.index',compact('customers_meals','meal_types','customers'));
    }



    // ================================


}
