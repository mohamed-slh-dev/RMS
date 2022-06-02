<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCalculatorController extends Controller
{



    // dashboard page
    public function calculators()
    {

        return view('admins.calculators.index');
    } 



    // ==============================



}
