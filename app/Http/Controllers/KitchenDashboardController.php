<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Customer;
use App\Models\Package;
use App\Models\PackagePlan;
use App\Models\PackagePlanMeal;
use App\Models\PackageMealComponent;
use App\Models\ChifEndTime;
use App\Models\CustomerMeal;
use App\Models\Notification;


use Illuminate\Http\Request;

class KitchenDashboardController extends Controller
{


    public function dashboard()
    {
        $end_shift = ChifEndTime::where('date',Date('Y-m-d'))->first();

        $components = Component::all();
      

           
             // get plans for today
        $plans = PackagePlan::where('date', date('Y-m-d'))->get();

        $plans = $plans->unique('package_id');


        // array of packages (key is package id)
        $packages = Package::all();
        $packagesArray = array();

        foreach ($packages as $package) {

            $packagesArray[$package->id] = $package->name;

        }



        // get number of customers per day
        $customersArray = array();

        foreach ($plans as $plan) {


            // default value
            $customersArray[$plan->package_id] = 0;
            
            foreach ($plan->meals as $planMeal) {

                $customerCount = 0;
                
                if ($planMeal->customers) {
                    $customerCount = $planMeal->customers->where('date', date('Y-m-d'))->count();
                }
                

                $customersArray[$plan->package_id] += 0 + $customerCount;

            } //end inner foreach

        } //end outer foreach

     

        if (!empty($end_shift))  {
            $plans = array ();
            $packagesArray = null;
            $customersArray = null;
            $shift = 'ended';
        }else{
            $shift = 'active';
        }

        $components_array = array ();

        $customers_meals = CustomerMeal::where('date',date('Y-m-d'))->get();

     foreach ($customers_meals as $customer_meal ) {
        $todays_plan_meals = PackagePlanMeal::where('id',$customer_meal->package_plan_meal_id)->get('package_meal_id');

        $meals_components = PackageMealComponent::whereIn('package_meals_id',$todays_plan_meals)->get();

     

      
       foreach ($meals_components as $meal_component) {
          
        if (array_key_exists($meal_component->component->id, $components_array)) {
           $components_array[$meal_component->component->id]['quantity'] += $meal_component->quantity;
        }else{
            $components_array[$meal_component->component->id]['quantity'] = $meal_component->quantity;
            $components_array[$meal_component->component->id]['unit'] = $meal_component->component->measuringunit;
            $components_array[$meal_component->component->id]['name'] = $meal_component->component->name;
        }

       }
     }
        

      
        return view('kitchens.dashboards.index', compact('plans', 'packagesArray', 'customersArray','shift','components_array'));
           
      
        

       

    }



    // ================================


    public function mealBreakdown($id) {

    
        //  get planMeal
        $planMeal = PackagePlanMeal::find($id);

        // 1- customers with excludes
        $customersWithExcludes = Customer::has('excludes')->with('meals', function($query) use ($id)  {

            $query->where('package_plan_meal_id', $id)->where('date', date('Y-m-d'));

        })->with('excludes')->get();
        



        // 2- customers without excludes
        $customersWithoutExcludes = Customer::doesnthave('excludes')->with('meals', function($query) use ($id)  {

            $query->where('package_plan_meal_id', $id)->where('date', date('Y-m-d'));

        })->get();


        // foreach count with excludes and without that have meals
        $withExcludesCount = 0;
        $withoutExcludesCount = 0;


        foreach ($customersWithExcludes as $customer) {
            
            if ($customer->meals->count() > 0) {
                $withExcludesCount++;
            }
        }


        foreach ($customersWithoutExcludes as $customer) {

            if ($customer->meals->count() > 0) {
                $withoutExcludesCount++;
            }
        }


        // dd($customersWithExcludes);

        // redirect
        return view('kitchens.dashboards.meal-breakdown', compact('planMeal', 'customersWithExcludes', 'customersWithoutExcludes', 'withExcludesCount', 'withoutExcludesCount'));

    }

    public function endShift()
    {
        $end_shift = new ChifEndTime();
        $end_shift->chif_id = session('chif_id');
        $end_shift->end_time = Date("H:i:s", strtotime("+4 hours"));
        $end_shift->date = Date('Y-m-d');

        $end_shift->save();

        $noti = new Notification();
        $noti->title = 'Shift Ended';
        $noti->desc = 'Shift ended by chifs at '.Date("H:i:s", strtotime("+4 hours"));
        $noti->url = '/admin/dashboard';
   
        $noti->save();
   

        return redirect()->back();

    }



}
