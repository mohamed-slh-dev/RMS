<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\District;
use App\Models\City;
use App\Models\UserDistrict;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminHRController extends Controller
{



    // hr page
    public function hr()
    {
        $users = User::all();
        $roles = Role::all();

        $cities = City::all();
        $districts = District::all();


        return view('admins.hr.index',compact('users','roles','cities','districts'));
    } 



    // ==============================

    public function newEmployee(Request $request)
    {
    
      $newemp = new User();

      $newemp->name = $request->name;
      $newemp->phone = $request->phone;
      $newemp->role_id = $request->role;
      $newemp->email = $request->email;

      $newemp->password = Hash::make($request->password);

      $newemp->save();

      if ($request->input('districts')) {
        
        $districts = $request->input('districts');

      for ($i = 0; $i < count($districts); $i++) {

          $user_districts = new UserDistrict();
          $user_districts->user_id = $newemp->id;
          $user_districts->district_id = $districts[$i];
          
          $user_districts->save();

      }
      }
     


      return redirect()->back();
    }

    public function editEmployee(Request $request)
    {
      $user = User::find($request->id);

      $user->name = $request->name;
      $user->phone = $request->phone;
      $user->email = $request->email;
      $user->role_id = $request->role;

      if ($request->password) {
      $user->password = Hash::make($request->password);
      }

      $user->save();

      return redirect()->back();


    }


    public function newRole(Request $request)
    {
    
      $newrole = new Role();
      
      $newrole->name = $request->role_name;
      $newrole->save();

    
        $role_id = $newrole->id;
        
        $modules_access = array();
        $modules = (['dashboard','menu','new-customers','customers','leads','orders','calculation','kitchen','inventory','store','delivery','finance','reports','hr','settings']);
            for ($i=1; $i < 16 ; $i++) { 
                $modules_access[] = $request->$i;
            }

            for ($i=0; $i < 15 ; $i++) {
                $permission_insert = new RolePermission ();

                $permission_insert->role_id =  $role_id;
                $permission_insert->modulename =  $modules[$i];
                $permission_insert->access=  $modules_access[$i];
               $permission_insert->save();
               }

               return redirect()->back()->with('success','New Role Added');

    }


    public function deleteRole($role_id)
    {
      $check = User::where('role_id', $role_id)->get();

      if ($check->count() > 0 ) {
         return redirect()->back()->with('warning','Make sure the role is not assigned to any employee!');
      }else{
         $permissions = RolePermission::where('role_id', $role_id);
         $permissions->delete();

        $role = Role::find($role_id);
        $role->delete();

        return redirect()->back()->with('success','Role Deleted');
      }

    }

    


}
