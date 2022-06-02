<?php

namespace App\Http\Controllers;
use App\Models\CustomerDelivery;
use App\Models\Chif;
use App\Models\Component;
use App\Models\Category;
use App\Models\ComponentCategory;
use App\Models\ShiftEndTime;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminKitchenController extends Controller
{


    // kitchen page
    public function kitchen()
    {
         $customers_deliveries = CustomerDelivery::where('date',Date('Y-m-d'))->get();

         $chifs = Chif::all();
         $components = Component::all();
         // bring categories
        $categories = ComponentCategory::all();
        $componentCategories = ComponentCategory::all();

        $end_time  =ShiftEndTime::find(1);

        return view('admins.kitchens.index',compact('customers_deliveries','chifs','components','categories','componentCategories','end_time'));
    } 



    public function newChif(Request $request)
    {
    
     
      $newchif = new Chif();

      $newchif->name = $request->name;
      $newchif->phone = $request->phone;
      $newchif->role = $request->role;
      $newchif->email = $request->email;

      $newchif->password = Hash::make($request->password);

      $newchif->save();

      return redirect()->back();
    }

    // ==============================



    public function shiftTime(Request $request)
    {
      $shiftTime = ShiftEndTime::find(1);

      $shiftTime->time = $request->time;

      $shiftTime->save();

      return redirect()->back();

    }

}
