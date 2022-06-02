<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\StoreItem;
use App\Models\StoreItemComponent;
use Illuminate\Http\Request;

class AdminStoreController extends Controller
{


    // stores page
    public function store() {

        $items = StoreItem::all();


        // dependencies
        $components = Component::all();

        return view('admins.stores.index', compact('items', 'components'));

    } 



    // ==============================



    // new item
    public function createItem(Request $request) {


        // if no component then don't add the item
        if ($request->component) {

            $newitem = new StoreItem();

            // info
            $newitem->name = $request->name;
            $newitem->cals = $request->cals;
            $newitem->price = $request->price;
            
            // handle picture and car picture files
            // A - picture (required)
            $newitem->img = time() . '-' . $request->file('img')->getClientOriginalName();

            $request->file('img')->move(public_path('assets/admin/images/store-items/'),  $newitem->img);


            $newitem->save();



            // add the component to table
            // component (multiple)
            for ($i = 0; $i < count($request->component); $i++) {

                $newcomponent = new StoreItemComponent();

                $newcomponent->item_id = $newitem->id;
                $newcomponent->component_id = $request->component[$i];
                $newcomponent->unit = $request->unit[$i];
                $newcomponent->quantity = $request->quantity[$i];


                $newcomponent->save();
            }



            return redirect()->back()->with('success', 'Item Added Successfully');


        } //end of there's no component so don't create



        return redirect()->back()->with('error', 'Item Not Added');
    } 


}
