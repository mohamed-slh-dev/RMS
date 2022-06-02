<?php

namespace App\Http\Controllers;

use App\Models\Margin;
use App\Models\OnetimeOrder;
use App\Models\Order;
use App\Models\CustomerSubscription;
use Illuminate\Http\Request;

class AdminFinanceController extends Controller
{



    // finances page
    public function finances()
    {  

        // settings
        $margin = Margin::find(1);

        // onetime orders
        $onetimeOrders = OnetimeOrder::all();

        $onetimeTotalIncome = 0;
        $onetimeTotalExpenses = 0;
        $onetimeTotalProfit = 0;

        foreach ($onetimeOrders as $order) {
            $onetimeTotalIncome = $order->meals->sum('selling_price');
            $onetimeTotalExpenses = $order->meals->sum('price');
            $onetimeTotalProfit = $onetimeTotalIncome - $onetimeTotalExpenses;
        }


        // dining
        $orders = Order::all();

        
        $totalIncome = 0;
        $totalExpenses = 0;
        $totalProfit = 0;

        foreach ($orders as $order) {
            $totalIncome = $order->meals->sum('selling_price');
            $totalExpenses = $order->meals->sum('price');
            $totalProfit = $totalIncome - $totalExpenses;
        }


        $subscriptions = CustomerSubscription::all();
        
        return view('admins.finances.index', compact('margin', 'orders', 'totalIncome', 'totalExpenses', 'totalProfit', 'onetimeOrders', 'onetimeTotalIncome', 'onetimeTotalExpenses', 'onetimeTotalProfit','subscriptions'));

    }



    // ==============================



    // update margin 
    public function updateMargin(Request $request)
    {

        $margin = Margin::find(1);


        // update values
        $margin->operation = $request->operation;
        $margin->margin = $request->margin;

        $margin->packing = $request->input('sticker') + $request->input('container') + $request->input('cutlery') + $request->input('bag');


        $margin->hot_drink = $request->input('hot-cup') + $request->input('hot-lid') + $request->input('stirrer');

        $margin->cold_drink = $request->input('cold-cup') + $request->input('cold-lid') + $request->input('straw');


        $margin->save();


        // return
        return redirect()->back()->with('success', 'Package Costs Updated Successfully');
    } 



}
