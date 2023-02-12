<?php

namespace App\Http\Controllers;

use App\Http\Requests\api\role\store;
use App\Services\repo\interfaces\roleRepoInterface;
use Illuminate\Http\Request;

class role extends Controller
{


    public $role;

    public function __construct(roleRepoInterface $role){

        $this->role=$role;


    }


    public function store(store $request){
        
        
        try{
            
            $name=$request->name;
            $permissions=$request->permissions;
            return response()->json(["data"=>$this->role->store($name,$permissions)],200);

        }catch(\Exception $ex){


            return response()->json(["message"=>$ex->getMessage()],500);
        }



    }

}
