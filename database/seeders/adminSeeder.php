<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions=json_encode(config("permission"));
        $role=role::create([
            "name"=>"super Admin",
            "permissions"=>$permissions
        ]);
        admin::create([
            "name"=>"Admin",
            "email"=>"alihmaidi095@gmail.com",
            "password"=>Hash::make("ali450892"),
            "role_id"=>$role->id
        ]);


    }
}
