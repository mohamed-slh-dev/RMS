<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use mysqli;

class AdminController extends Controller
{
    


    // login page
    public function login() {

        return view('admins.logins.index');

    } 



    
    // logout page
    public function logout() {
        session()->forget('user_name');

        session()->forget('user_id');

        return redirect()->route('admin.login');
    } 

    // ==============================
    

  //check login page
  public function checkLogin(Request $request) {
    // email + password
    $email = $request->email;
    $password = $request->password;


    // get user using email
    $user = User::where('email', $email)->first();
    
    // if found then check password (he pass)
    if ($user && Hash::check($password, $user->password)) {

        // put sessions
        session()->put('user_name', $user->name);

        session()->put('user_id', $user->id);
        session()->put('user_type',  $user->role->name);

        // redirect to dashboard
        return redirect()->route('admin.dashboard');

    } // end of password correct

   
    // he don't pass
    else {

        // redirect to login again
        return redirect()->route('admin.login');

    } //end of wrong password or user not found


    
} //end of checkuser login function













// --------------------------------------------------------------


   




}
