<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role =  DB::table('roles')->insertGetId([
            'name' => 'Admin',
        ]); 

        $modules = (['dashboard','menu','new-customers','customers','leads','orders','calculation','kitchen','inventory','store','delivery','finance','reports','hr','settings']);

        for ($i=0; $i < 15 ; $i++) { 
            DB::table('role_permissions')->insert([
                'modulename' =>  $modules[$i],
                'access'=> '1',
                'role_id'=> $role
            ]); 
        }

        // create meal
        DB::table('users')->insert([
            'name' => 'Health Road',
            'phone' => '971 55 502 2838',
            'role_id' => $role,
            'email' => 'admin@healthroad.ae',
            'password' => Hash::make("123@456"),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
