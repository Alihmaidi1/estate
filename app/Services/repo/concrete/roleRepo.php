<?php 

namespace App\Services\repo\concrete;

use App\Models\role as ModelsRole;
use App\Services\repo\interfaces\roleRepoInterface;


class roleRepo implements roleRepoInterface{


    public function store($name,$permissions){



        return ModelsRole::create([

            "name"=>$name,
            "permissions"=>json_encode($permissions)

        ]);

    }


}