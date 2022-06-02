<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Lead;
use App\Models\LeadFollowup;
use App\Models\User;
use App\Models\Package;
use App\Models\LeadSource;
use App\Models\Notification;



use Illuminate\Http\Request;

class AdminLeadController extends Controller
{


    // leads page
    public function leads()
    {

        $leads = Lead::all();


        // depenedencies
        $cities = City::all();
        $districts = District::all();
        $users = User::all();
        $packages = Package::all();
        $sources = LeadSource::all();


        // dependencies for filter
        return view('admins.leads.index', compact('leads', 'cities', 'districts', 'users','packages','sources'));

    }











    // ============================



    //filter leads
    public function filterLeads(Request $request)
    {

        $filters = array();

        // get the request var
        $nameFilter = !empty($request->name) ? $request->name : '';

        if ($request->status) {
            $filters['status'] =  $request->status;
        }


        if ($request->input('follow-up')) {
            $filters['follow_up'] =  $request->input('follow-up');
        }


        if ($request->input('city')) {
            $filters['city_id'] =  $request->input('city');
        }

        if ($request->input('district')) {
            $filters['district_id'] =  $request->input('district');
        }
      

        if ($request->input('manager')) {
            $filters['user_id'] =  $request->input('manager');
        }


        if ($request->input('phone')) {
            $filters['phone'] =  $request->input('phone');
        }


        
        // do the query
        $leads = Lead::where($filters)->where('name', 'LIKE', '%'. $request->name. '%')->get();


        // depenedencies
        $cities = City::all();
        $districts = District::all();
        $users = User::all();
        $packages = Package::all();
        $sources = LeadSource::all();

        
        return view('admins.leads.index', compact('leads', 'cities', 'districts', 'users', 'packages','sources'));
        

    } 






    // ==============================



    //new lead
    public function addLead(Request $request)
    {

        $lead = new Lead();

        // add info directly
        $lead->name = $request->name;
        $lead->phone = $request->phone;
        $lead->email = $request->email;
        $lead->user_id = $request->agent;
        $lead->package_id = $request->package;
        $lead->source_id = $request->source;
        $lead->revenue = $request->revenue;
        $lead->note = $request->note;


        $lead->city_id = $request->city;
        $lead->district_id = $request->district;
        $lead->address = $request->address;
        $lead->follow_up = $request->input('follow-up');


        $lead->status = "pending";


        // save
        $lead->save();

        return redirect()->back()->with('success', 'Lead Added Successfully');

        
    } 


    //update lead
    public function updateLead(Request $request)
    {

        $lead = Lead::find($request->lead_id);

        // add info directly
        $lead->name = $request->name;
        $lead->phone = $request->phone;
        $lead->email = $request->email;
        $lead->user_id = $request->agent;
        $lead->package_id = $request->package;
        $lead->source_id = $request->source;
        $lead->revenue = $request->revenue;
        $lead->note = $request->note;


        $lead->city_id = $request->city;
        $lead->district_id = $request->district;
        $lead->address = $request->address;



        // save
        $lead->save();

        return redirect()->back()->with('success', 'Lead Added Successfully');

        
    } 







    // ==============================



    //lost lead
    public function lostLead($id)
    {

        $lead = Lead::find($id);
        $lead->status = 'lost';
        $lead->save();


              
     $noti = new Notification();
     $noti->title = 'Lead Converted';
     $noti->desc = 'Lead '.$lead->name.' has been lost';
     $noti->url = '/admin/leads';
     $noti->created_by = session('user_id');

     $noti->save();

        return redirect()->back()->with('success', 'Lead Lost Successfully');

        
    }

     //converted lead
     public function convertedLead($id)
     {
 
         $lead = Lead::find($id);
         $lead->status = 'converted';
         $lead->save();
 
        
         
     $noti = new Notification();
     $noti->title = 'Lead Converted';
     $noti->desc = 'Lead '.$lead->name.' has been converted';
     $noti->url = '/admin/leads';
     $noti->created_by = session('user_id');

     $noti->save();

         return redirect()->back()->with('success', 'Lead Converted Successfully');
 
         
     }
 










    // ==============================



    //new lead
    public function addFollowUp(Request $request)
    {

        $followup = new LeadFollowup();

        // add info directly
        $followup->date = $request->date;
        $followup->note = $request->note;
        $followup->next_follow_up = $request->input('follow-up');
        $followup->lead_id = $request->lead_id;



        // save
        $followup->save();

        return redirect()->back()->with('success', 'Follow Up Added Successfully');
    } 

    public function addSource(Request $request)
    {
        $newsource = new LeadSource();

        $newsource->name = $request->name;
        $newsource->save();

        return redirect()->back()->with('success', 'New Source Added Successfully');

    }

     //delete lead
    public function deleteSource($id)
    {

        $source = LeadSource::find($id)->delete();

        return redirect()->back()->with('success', 'Source Deleted Successfully');

        
    }


}
