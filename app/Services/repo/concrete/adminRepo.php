<?php 

namespace App\Services\repo\concrete;

use App\Models\admin;
use App\Services\repo\interfaces\adminRepoInterface;


class adminRepo implements adminRepoInterface{


    public function getAdminByEmail($email){


        return admin::where("email",$email)->firstOrFail();

    }
    

}