<?php 

namespace App\Services\repo\concrete;

use App\Http\Controllers\role;
use App\Models\role as ModelsRole;
use App\Services\repo\interfaces\roleRepoInterface;


class roleRepo implements roleRepoInterface{


    public function store($name,$permissions){



        return ModelsRole::create([

            "name"=>$name,
            "permissions"=>json_encode($permissions)

        ]);

    }


    public function getallrole(){


        return ModelsRole::all();
    }


    public function update($id,$name,$permissions){


        $role=ModelsRole::findOrFail($id);
        $role->name=$name;
        $role->permissions=json_encode($permissions);
        $role->save();
        return $role;

    }


    public function getrole($id){


        return ModelsRole::findOrFail($id);

    }


    public function delete($id){

        $role=ModelsRole::findOrFail($id);
        $role1=$role;
        $role->delete();
        return $role1;

    }

}