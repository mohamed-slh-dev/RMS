<?php

namespace App\Http\Controllers;
use App\Models\CustomerDelivery;
use App\Models\Customer;
use App\Models\City;

use Illuminate\Http\Request;

class KitchenDeliveriesController extends Controller
{
    public function deliveries()
    {

        $customers_deliveries = CustomerDelivery::where('date',Date('Y-m-d'))->get();
      
        $customers = Customer::all();
        $cities = City::all();

        return view('kitchens.deliveries.index',compact('customers_deliveries','customers','cities'));
    }

    public function deliveriesFilter(Request $request)
    {

        $filters = array();

        // id
        if ($request->id != null) {

           $filters["id"] = $request->id;
       }

         // status
      if ($request->customer != "all") {

          $filters["customer_id"] = $request->customer;
      }


      // dd($request->status);
      if ($request->status != "all") {

          $filters["status"] = $request->status;
      }

        $customers_deliveries = CustomerDelivery::where('date',Date('Y-m-d'))
        ->where($filters)
        ->get();
      
        $customers = Customer::all();

        return view('kitchens.deliveries.index',compact('customers_deliveries','customers'));
    }


    public function ready($delivery_id)
    {
        $delivery = CustomerDelivery::find($delivery_id);
      
        $delivery->status = 'ready';
 
        $delivery->save();

        return redirect()->back()->with('success', 'Status Changed Successfully!');
   
    }
}
