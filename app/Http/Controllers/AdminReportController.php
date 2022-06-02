<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReportController extends Controller
{


    // reports page
    public function reports()
    {

        return view('admins.reports.index');
    } 



    // ==============================


}
