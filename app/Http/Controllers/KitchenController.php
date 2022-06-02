<?php

namespace App\Http\Controllers;
use App\Models\Chif;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    
    public function login() {

        return view('kitchens.logins.index');
    }



    // ================================
      // logout page
      public function logout() {
        session()->forget('chif_name');

        session()->forget('chif_id');

        return redirect()->route('kitchen.login');
    } 

    // ==============================
    

  //check login page
  public function checkLogin(Request $request) {
    // email + password
    $email = $request->email;
    $password = $request->password;


    // get user using email
    $user = Chif::where('email', $email)->first();
    
    // if found then check password (he pass)
    if ($user && Hash::check($password, $user->password)) {

        // put sessions
        session()->put('chif_name', $user->name);

        session()->put('chif_id', $user->id);
        session()->put('chif_type',  $user->role);

        // redirect to dashboard
        return redirect()->route('kitchen.dashboard');

    } // end of password correct

   
    // he don't pass
    else {

        // redirect to login again
        return redirect()->route('kitchen.login');

    } //end of wrong password or user not found


    
} //end of checkuser login function

}
