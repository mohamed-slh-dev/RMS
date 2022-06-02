<?php

namespace App\Http\Controllers;
use App\Models\DeliveryCompany;
use App\Models\DeliveryCompanyDistrict;
use App\Models\DeliveryCompanyDriver;
use App\Models\DeliveryCompanyDriverDistrict;
use App\Models\City;
use App\Models\District;
use App\Models\CustomerDelivery;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function login() {

        return view('companies.logins.index');
    }

     //check login page
  public function checkLogin(Request $request) {
    // email + password
    $email = $request->email;
    $password = $request->password;


    // get user using email
    $company = DeliveryCompany::where('email', $email)->first();
    
    // if found then check password (he pass)
    if ($company && Hash::check($password, $company->password)) {

        // put sessions
        session()->put('company_name', $company->name);

        session()->put('company_id', $company->id);

        // redirect to dashboard    
        return redirect()->route('company.dashboard');

    } // end of password correct

   
    // he don't pass
    else {

        // redirect to login again
        return redirect()->route('company.login');

    } //end of wrong password or user not found


    
} //end of checkuser login function

public function logout() {
    session()->forget('company_name');

    session()->forget('company_id');

    return redirect()->route('company.login');
} 



    public function dashboard() {

        return view('companies.dashboard.index');
    }

    public function deliveries() {

        $deliveries = CustomerDelivery::where('delivery_company_id', session('company_id'))
        ->orderBy('date','desc')
        ->get();

        return view('companies.deliveries.index',compact('deliveries'));
    }

    public function operationHealth() {

        $deliveries  = CustomerDelivery::where('delivery_company_id', session('company_id'))
        ->where('delivery_company_driver_id', null)
        ->get()
        ->unique('customer_id');

        $drivers = DeliveryCompanyDriver::where('delivery_company_id',session('company_id'))->get();

        return view('companies.operation-health.index',compact('deliveries','drivers'));
    }

    public function assignDriver (Request $request){

        CustomerDelivery::where('delivery_company_id',session('company_id'))
        ->where('customer_id', $request->customer_id)
        ->update([
         'delivery_company_driver_id' => $request->driver,
      ]);


      return redirect()->back()->with('success', 'Driver Assigned Successfully');

    }

    public function drivers() {

        $cities  = City::all();
        $districts = District::all();
        $drivers = DeliveryCompanyDriver::all();

        return view('companies.drivers.index',compact('cities','districts','drivers'));
    }

     // new driver
     public function addDriver(Request $request)
     {
 
         $newdriver = new DeliveryCompanyDriver();
 
         // info
         $newdriver->delivery_company_id = session('company_id');
         $newdriver->name = $request->input('name');
         $newdriver->phone = $request->input('phone');
         $newdriver->email = $request->input('email');
         $newdriver->license = $request->input('license');
         $newdriver->password = Hash::make($request->input('password'));
         $newdriver->city_id = $request->input('city');
 
 
         // handle picture and car picture files
         // A - license (required)
        // dd($request->file('license-img'));
         $newdriver->license_img = time() . '-' . $request->file('license-img')->getClientOriginalName();
 
         $request->file('license-img')->move(public_path('assets/companies/images/drivers/licenses/'),  $newdriver->license_img);
 
 
         // B - Profile (required)
         $newdriver->profile_img = time() . '-' . $request->file('profile-img')->getClientOriginalName();
 
         $request->file('profile-img')->move(public_path('assets/companies/images/drivers/profiles/'),  $newdriver->profile_img);
 
 
         $status = $newdriver->save();
 
 
 
 
 
         // district table
         $districts = $request->input('districts');
 
         for ($i = 0; $i < count($districts); $i++) {
 
             $new_driver_district = new DeliveryCompanyDriverDistrict();
             $new_driver_district->driver_id = $newdriver->id;
             $new_driver_district->district_id = $districts[$i];
             
             $new_driver_district->save();
 
         }
     
 
 
        
             return redirect()->back()->with('success', 'Driver Successfully Added');
 
     }  //end method

    public function settings() {

        $company = DeliveryCompany::where('id', session('company_id'))->first();

        $company_districts = DeliveryCompanyDistrict::where('delivery_company_id',session('company_id'))->get();

        $cities = City::all();
        $districts = District::all();


        $company_districts_array = array ();

        foreach ($company_districts as $district ) {
            $company_districts_array[$district->district_id] = 1;
        }

        return view('companies.settings.index',compact('company','company_districts_array','districts','cities'));
    }

    public function updateSettings (Request $request){

        $company = DeliveryCompany::find(session('company_id'));

        // info
        $company->name = $request->input('name');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->city_id = $request->input('city');

        if ($request->password) {
            $company->password = Hash::make($request->input('password'));
        }

        $company->save();


        DeliveryCompanyDistrict::where('delivery_company_id', session('company_id'))->delete();

        $districts = $request->input('districts');

        for ($i = 0; $i < count($districts); $i++) {

            $new_company_district = new DeliveryCompanyDistrict();
            $new_company_district->delivery_company_id = session('company_id');
            $new_company_district->district_id = $districts[$i];
            
            $new_company_district->save();

        }


        return redirect()->back()->with('success', 'Settings Successfully Updated');

    }
}
