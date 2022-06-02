<?php

namespace App\Http\Controllers;
use App\Models\ComponentCategory;
use App\Models\Component;
use App\Models\Purchase;
use App\Models\PurchaseComponent;
use App\Models\PurchaseComponentQuantity;
use App\Models\SauceComponent;
use App\Models\Setting;
use App\Models\Supplier;
use App\Models\SupplierComponent;
use App\Models\Notification;

use Illuminate\Http\Request;

class AdminInventoryController extends Controller
{



    // inventory page
    public function inventory()
    {   

        // bring categories
        $categories = ComponentCategory::all();


        // depenedencies
        $components = Component::join('component_categories', 'component_categories.id', '=' , 'components.component_category_id')
        ->select('components.*','component_categories.name as category_name')
        ->get();
        $stock_component = Component::join('component_categories', 'component_categories.id', '=' , 'components.component_category_id')
        ->select('components.*','component_categories.name as category_name')
        ->get();

        $componentCategories = ComponentCategory::all();
        $purchases = Purchase::all();

          // bring categories
      $stock_categories = ComponentCategory::all();

        // suppliers + supplier component + component name too
        $suppliers = Supplier::all();
        $supplierComponents = SupplierComponent::with('component')->get();

        $supplierComponentNames = array();
        $counter = 0;

        $components_value = 0;
        foreach ($components as $component) {
           $components_value += $component->quantity * $component->price;
        }

        foreach ($supplierComponents as $supplierComponent) {

            $supplierComponentNames[$counter] = $supplierComponent->component->name;
            $counter++;
        }


        

        // settings po 
        $po = Setting::find(1);
        $po = $po->po;


        // filter for components
        $componentFilters = array();


        return view('admins.inventories.index', compact('categories', 'components', 'componentCategories', 'suppliers', 'supplierComponents', 'supplierComponentNames','purchases','components_value','stock_categories', 'po', 'componentFilters','stock_component'));
    } 




 // inventory page
 public function filterStock(Request $request)
 {   

    // dd($request);
    $filters = array();

     // status
  if ($request->category != "all") {

      $filters["component_category_id"] = $request->category;
  }

     // bring categories
     $categories = ComponentCategory::all();

    

     // depenedencies
     $components = Component::join('component_categories', 'component_categories.id', '=' , 'components.component_category_id')
     ->select('components.*','component_categories.name as category_name')
     ->get();

     $stock_component = Component::join('component_categories', 'component_categories.id', '=' , 'components.component_category_id')
     ->select('components.*','component_categories.name as category_name')
     ->where($filters)->get();

     $componentCategories = ComponentCategory::all();
     $purchases = Purchase::all();


     // suppliers + supplier component + component name too
     $suppliers = Supplier::all();
     $supplierComponents = SupplierComponent::with('component')->get();

     $supplierComponentNames = array();
     $counter = 0;

     $components_value = 0;
     foreach ($components as $component) {
        $components_value += $component->quantity * $component->price;
     }

     foreach ($supplierComponents as $supplierComponent) {

         $supplierComponentNames[$counter] = $supplierComponent->component->name;
         $counter++;
     }





        // filter for components
        $componentFilters = array();

           // settings po 
           $po = Setting::find(1);
           $po = $po->po;


     return view('admins.inventories.index', compact('categories', 'components', 'componentCategories', 'suppliers', 'supplierComponents', 'supplierComponentNames','purchases','po','components_value', 'componentFilters','stock_component'));
 }



    // ================================ Components Tab


    // add component
    public function addComponent(Request $request)
    {

        $newcomponent =  new Component();


        // get info
        $newcomponent->name = $request->name;
        $newcomponent->brand = $request->brand;

        $newcomponent->component_category_id  = $request->category;
        $newcomponent->measuringunit = $request->unit;

        
        $newcomponent->wastage = $request->wastage;
        $newcomponent->increase  = $request->increase;

        // box quantity either 0 or any bigger number
        $newcomponent->box_quantity = $request->input('box-quantity');


        if ($request->unit == 'gram' || $request->unit == 'milliliter'
        ) {
            $newcomponent->quantity = $request->quantity * 1000;
            $newcomponent->price = $request->price  / 1000;

            $newcomponent->min_quantity  = $request->min_quantity  * 1000;
        } else {
            $newcomponent->quantity = $request->quantity;
            $newcomponent->price = $request->price;


            $newcomponent->min_quantity  = $request->min_quantity;
        }




        // dd($request->cals/100);
        $newcomponent->cals = $request->cals / 100;
        $newcomponent->proteins = $request->protein / 100;
        $newcomponent->carbs = $request->carbs / 100;
        $newcomponent->fats = $request->fats / 100;

        // handle picture and car picture files
        // A - picture (required)
        $newcomponent->img = time() . '-' . $request->file('img')->getClientOriginalName();

        $request->file('img')->move(public_path('assets/admin/images/components/'),  $newcomponent->img);

        $status = $newcomponent->save();

        if ($status) {

            return redirect()->back()->with('success', 'Component Successfully Added');
        } else {

            echo 'error';
        }
    } //end method

    


    // ------------------
    


    public function editComponent(Request $request)
    {
        $component = Component::find($request->id);

        $component->name = $request->name;
        $component->component_category_id = $request->category;
        $component->price = $request->price;
        $component->quantity = $request->quantity;
        $component->wastage = $request->wastage;
        $component->increase = $request->increase;
        $component->min_quantity = $request->min_quantity;
        $component->cals = $request->cals/100;
        $component->proteins = $request->protein/100;
        $component->fats = $request->fats/100;
        $component->carbs = $request->carbs/100;

        $component->brand = $request->brand;


        $component->save();

        return redirect()->back()->with('success','Component Updated Successfully');


    }



    // -----------------




    // ============================== Supplier Tab



     // add supplier
    public function addSupplier(Request $request)
    {
 
 
        //  if no components added then don't add it
        if ($request->component) {

            $newsupplier =  new Supplier();


            // get info
            $newsupplier->name = $request->name;
            $newsupplier->phone = $request->phone;
            $newsupplier->email = $request->email;
            $newsupplier->address = $request->address;

        
            $status = $newsupplier->save();

            // component (multiple)
            for ($i=0; $i < count($request->component); $i++) { 

                $newcomponent = new SupplierComponent();

                $newcomponent->supplier_id = $newsupplier->id;
                $newcomponent->component_id = $request->component[$i];

                $newcomponent->price = $request->price[$i];



                $newcomponent->save();

            } //end for loop



            if ($status) {

            return redirect()->back()->with('success','Supplier Successfully Added');

            } else { 
                
                echo'error!';
            }


        } //end of no component so don't add



        // no component so no supplier
        else {

            return redirect()->back()->with('error', 'Supplier Not Added');

        } //end else





    } //end method





    public function editSupplier(Request $request)
    {
      

        $supplier = Supplier::find($request->id);
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->address = $request->address;

        $supplier->save();

        $prices = array ();

        $prices = $request->price;

        $i=0;

        $supplier_components = SupplierComponent::where('supplier_id',$request->id)->get();

        foreach ($supplier_components as $component) {
          $component->price = $prices[$i];

          $component->save();

          $i++;
        }

       

        return redirect()->back()->with('success', 'Supplier Updated Successfully');

    }


     // ============================== Purchase Tab



    // add Purchase
    public function addPurchase(Request $request)
    {


        //  if no components added then don't add it
        if ($request->component) {

            
            $newpurchase =  new Purchase();


            // get info
            $newpurchase->supplier_id = $request->supplier;
            $newpurchase->expected_date = $request->input('receive-date');
            $newpurchase->note = $request->note;
            $newpurchase->status = 'pending';
            $newpurchase->reference = $request->reference;
            $newpurchase->po = $request->po;
            
            
            $status = $newpurchase->save();



            // increase the po in settings
            $updateSetting = Setting::find(1);
            $updateSetting->po = $request->po;

            $updateSetting->save();




            // component (multiple)
            $pricesum = 0;

            for ($i=0; $i < count($request->component); $i++) { 

                $newcomponent = new PurchaseComponent();

                $supplier_component_id = SupplierComponent::where('component_id', $request->component[$i])->where('supplier_id',$request->supplier )->first();

                $newcomponent->purchase_id = $newpurchase->id;
                $newcomponent->supplier_component_id =  $supplier_component_id->id ;
                $newcomponent->quantity = $request->quantity[$i];

                $newcomponent->save();

                // calc price per one
                $newcomponent->price =  $request->quantity[$i] * $newcomponent->component->price;

                $newcomponent->save();


                // calc the price for all
                $pricesum += $newcomponent->price;

            } //end for loop


            // copy the price 
            $newpurchase->price = $pricesum;


            $status = $newpurchase->save();



            if ($status) {

            return redirect()->back()->with('success','Supplier Successfully Added');

            } else { echo'error!';}


        } //end no component so don't add if






        // else return to page
        else {


            return redirect()->back()->with('error', 'Supplier Not Added');


        } // end else


    } //end method






    // --------------------


    public function received(Request $request)
    {

        $purchase_id =  $request->purchase_id;

        $purchase = Purchase::find($purchase_id);

        $i = 0;
        foreach ($purchase->quantity as $purchase_comp) {

            $component = Component::find($purchase_comp->component->component->id);



            $supplier_component_info = SupplierComponent::where('component_id', $component->id)->where('supplier_id', $purchase->supplier_id)->first();

            if ($request->receivedquantity == 'samequantity') {
                $quantity = $purchase_comp->quantity;
            } else {
                $quantity = $request->recevied_quantity[$i];
            }

            // if grams * 1000
            if ($component->measuringunit == "gram" || $component->measuringunit == "milliliter") {

                $component->quantity =  $component->quantity + $quantity * 1000;
                $component->price = $supplier_component_info->price / 1000;
            } else {

                $component->quantity =  $component->quantity + $quantity;
                $component->price = $supplier_component_info->price;
            }

            $component->save();

            $i++;
        }

        $purchase->status = 'received';
        $purchase->received_date = Date('Y-m-d');
        $purchase->action_note = $request->action_note;

        $purchase->save();

        $noti = new Notification();
        $noti->title = 'Purchase Received';
        $noti->desc = 'Purchase with p.o number #'.$purchase->po.' has been received';
        $noti->url = '/admin/inventory';
        $noti->created_by = session('user_id');
   
        $noti->save();
   

        return redirect()->back()->with('success', 'Purchase Status Changed Successfully!');
    }




    // --------------------

    public function canceled(Request $request)
    {
        $purhase_id = $request->purchase_id;

        $purchase = Purchase::find($purhase_id);

        if ($request->cancel_option != 'other') {
            $reason = $request->cancel_option;
        } else {
            $reason = $request->cancel_note;
        }


        $purchase->status = 'canceled';
        $purchase->received_date = Date('Y-m-d');
        $purchase->action_note = $reason;

        $purchase->save();

        return redirect()->back()->with('success', 'Status Changed Successfully!');
    }





    


     // ============================== Purchase Order Tab


    public function updatePurchaseOrder(Request $request) {


        $po = $request->input('po-number');


        // update in setting db
        $setting = Setting::find(1);

        $setting->po = $po;
        $setting->save();


        return redirect()->back()->with('success', 'Purchase Order Updated Successfully');
        
    }









} //end controller
