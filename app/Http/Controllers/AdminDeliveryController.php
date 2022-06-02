<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use App\Models\DeliveryTime;
use App\Models\District;
use App\Models\Driver;
use App\Models\DriverDistrict;
use App\Models\DeliveryCompany;
use App\Models\DeliveryCompanyDistrict;
use App\Models\DriverTime;
use App\Models\DaysOff;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDeliveryController extends Controller
{


    // dashboard page
    public function deliveries()
    {

        // driver tab + dependencies
        $cities = City::all();
        $districts = District::all();
        $drivers = Driver::all();
        $companies = DeliveryCompany::all();


        // delivery time tab
        $delivery_times = DeliveryTime::all();

        // delivery time tab
        $daysoff = DaysOff::all();

        // customers
        $customers = Customer::all();


        return view('admins.deliveries.index', compact('delivery_times', 'districts', 'cities', 'drivers', 'customers','companies','daysoff'));

    }







    // ============================== Timing Tab


    // new driver
    public function addDriver(Request $request)
    {

        $newdriver = new Driver();

        // info
        $newdriver->name = $request->input('name');
        $newdriver->phone = $request->input('phone');
        $newdriver->email = $request->input('email');
        $newdriver->license = $request->input('license');
        $newdriver->password = Hash::make($request->input('password'));
        $newdriver->city_id = $request->input('city');


        // handle picture and car picture files
        // A - license (required)
        $newdriver->license_img = time() . '-' . $request->file('license-img')->getClientOriginalName();

        $request->file('license-img')->move(public_path('assets/admin/images/drivers/licenses/'),  $newdriver->license_img);


        // B - Profile (required)
        $newdriver->profile_img = time() . '-' . $request->file('profile-img')->getClientOriginalName();

        $request->file('profile-img')->move(public_path('assets/admin/images/drivers/profiles/'),  $newdriver->profile_img);


        $status = $newdriver->save();





        // district table
        $districts = $request->input('districts');

        for ($i = 0; $i < count($districts); $i++) {

            $new_driver_district = new DriverDistrict();
            $new_driver_district->driver_id = $newdriver->id;
            $new_driver_district->district_id = $districts[$i];
            
            $new_driver_district->save();

        }






        // delivery times table
        $times = $request->input('delivery-times');

        for ($i = 0; $i < count($times); $i++) {

            $new_driver_times = new DriverTime();
            $new_driver_times->driver_id = $newdriver->id;
            $new_driver_times->timing_id = $times[$i];

            $new_driver_times->save();
        }

    


        if ($status) {

            return redirect()->back()->with('success', 'Driver Successfully Added');
        } else {

            echo 'error';
        }

    }  //end method




    public function addCompany(Request $request)
    {

        $newcompany = new DeliveryCompany();

        // info
        $newcompany->name = $request->input('name');
        $newcompany->phone = $request->input('phone');
        $newcompany->email = $request->input('email');
        $newcompany->password = Hash::make($request->input('password'));
        $newcompany->city_id = $request->input('city');

        $newcompany->pickuptime_start = $request->input('pickup_start');
        $newcompany->pickuptime_end = $request->input('pickup_end');


        //cities delivery charges
        $newcompany->dubai_charge = $request->input('dubai');
        $newcompany->abudhabi_charge  = $request->input('abudhabi');
        $newcompany->sharjah_charge = $request->input('sharjah');
        $newcompany->ajman_charge = $request->input('ajman');
        $newcompany->ummalquwain_charge  = $request->input('ummalquwain');
        $newcompany->alain_charge = $request->input('alain');
        $newcompany->rak_charge = $request->input('rak');



        // handle picture and car picture files
        // A - license (required)
        if ($request->file('contract')) {
            $newcompany->attachment = time() . '-' . $request->file('contract')->getClientOriginalName();

            $request->file('contract')->move(public_path('assets/admin/images/deliverycompanies/attachments/'),  $newcompany->attachment);
    
        }
      

      
        $status = $newcompany->save();





        // district table
        $districts = $request->input('districts');

        for ($i = 0; $i < count($districts); $i++) {

            $new_company_district = new DeliveryCompanyDistrict();
            $new_company_district->delivery_company_id = $newcompany->id;
            $new_company_district->district_id = $districts[$i];
            
            $new_company_district->save();

        }







        if ($status) {

            return redirect()->back()->with('success', 'Company Successfully Added');
        } else {

            echo 'error';
        }

    }  //end method


    public function updateCompany(Request $request)
    {

        $company = DeliveryCompany::find($request->comp_id);

        // info
        $company->name = $request->input('name');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        if ($request->input('password')) {
            $company->password = Hash::make($request->input('password'));
        }
        $company->city_id = $request->input('city');

        $company->pickuptime_start = $request->input('pickup_start');
        $company->pickuptime_end = $request->input('pickup_end');

        //cities delivery charges
        $company->dubai_charge = $request->input('dubai');
        $company->abudhabi_charge  = $request->input('abudhabi');
        $company->sharjah_charge = $request->input('sharjah');
        $company->ajman_charge = $request->input('ajman');
        $company->ummalquwain_charge  = $request->input('ummalquwain');
        $company->alain_charge = $request->input('alain');
        $company->rak_charge = $request->input('rak');



        // handle picture and car picture files
        // A - license (required)
        if ($request->file('contract')) {
            $company->attachment = time() . '-' . $request->file('contract')->getClientOriginalName();

            $request->file('contract')->move(public_path('assets/admin/images/deliverycompanies/attachments/'),  $company->attachment);
        }
     


      
        $status = $company->save();

        // district table
        $districts = $request->input('districts');

            for ($i = 0; $i < count($districts); $i++) {
            $check = DeliveryCompanyDistrict::where('delivery_company_id',$company->id)->where('district_id',$districts[$i])->get();
                if ($check->count() == 0) {
                    $new_company_district = new DeliveryCompanyDistrict();
                    $new_company_district->delivery_company_id = $company->id;
                    $new_company_district->district_id = $districts[$i];
                    
                    $new_company_district->save();
                    } 
                }
          

        if ($status) {

            return redirect()->back()->with('success', 'Company updated Successfully Added');
        } else {

            echo 'error';
        }

    }  //end method





    // ============================== Charge Tab


    // new charge
    public function addCharge(Request $request)
    {

        $city = City::find($request->city);

        // update charge
        $city->charge = $request->charge;

        $status = $city->save();

        if ($status) {

            return redirect()->back()->with('success', 'Delivery\'s Charge Successfully Added');
        } else {

            echo 'error';
        }
    }  //end method

    public function updateCharge(Request $request)
    {

        $city = City::find($request->city_id);

        // update charge
        $city->charge = $request->charge;

        $status = $city->save();

        if ($status) {

            return redirect()->back()->with('success', 'Delivery\'s Charge Successfully Added');
        } else {

            echo 'error';
        }
    }  //end method









    // ============================== Timing Tab


    // new delivery time
    public function addDeliveryTime(Request $request)
    {

        $newdeliverytime = new DeliveryTime();

        // info
        $newdeliverytime->timing = $request->input('timing-start') .' - '. $request->input('timing-end');


        $status = $newdeliverytime->save();

        if ($status) {

            return redirect()->back()->with('success', 'Delivery Time Successfully Added');
        } else {

            echo 'error';
        }

    }  //end method


     // ============================== Day Off Tab


    // new delivery time
    public function addDaysOff(Request $request)
    {

        $checkifexist = DaysOff::where('name', $request->dayoff)->first();
      
        if ($checkifexist) {
           
        }else{

            $newdayoff = new DaysOff();

            // info
            $newdayoff->name = $request->dayoff;
    
    
            $status = $newdayoff->save();
        }
      


            return redirect()->back()->with('success', 'Day Added Successfully Added');
     

    }  //end method



    public function deleteDaysOff($id)
    {
        $dayoff = DaysOff::find($id);

        $dayoff->delete();
     

          return redirect()->back()->with('success', 'Day Off Added Successfully');
     
    } //end method




}
