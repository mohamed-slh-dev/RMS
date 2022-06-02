<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\Package;
use App\Models\Component;
use App\Models\CustomerSubscription;
use App\Models\Order;
use App\Models\DeliveryCompany;
use App\Models\ChifEndTime;
use App\Models\ShiftEndTime;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    


    // dashboard page
    public function dashboard() {

        $chif_end = ChifEndTime::where('date',Date('Y-m-d'))->first();

        $shift_end  = ShiftEndTime::find(1);

        $active_customers = Customer::where('to_date', '>' , Date('Y-m-d'))->get();
        $customers = Customer::limit(5)->orderBy('id','desc')->get();
        $leads = Lead::all();
        $packages = Package::all();
        $subs = CustomerSubscription::all();
        $orders = Order::all();
        $components = Component::all();
        $companies = DeliveryCompany::all();

        $components_value = 0;
        foreach ($components as $component) {
           $components_value += $component->quantity * $component->price;
        }


        
        // get number of customers per day
        $customersArray = array();

        foreach ($packages as $package) {
            foreach ($package->plans as $plan) {


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
        }
       

        return view('admins.dashboards.index',compact('customers','leads','packages','subs','orders','components_value','active_customers','companies','chif_end','shift_end','customersArray'));

    } 



    // ==============================



}
