<?php

namespace App\Http\Controllers;

use App\Http\Requests\api\role\deleterole;
use App\Http\Requests\api\role\getrole;
use App\Http\Requests\api\role\store;
use App\Http\Requests\api\role\update;
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


    public function getallrole(Request $request){

        try{


            return response()->json(["data"=>$this->role->getallrole()],200);



        }catch(\Exception $ex){


            return response()->json(["message"=>$ex->getMessage()],500);


        }


    }



    public function update(update $request){

        try{

            $id=$request->id;
            $name=$request->name;
            $permissions=$request->permissions;

            return response()->json(["data"=>$this->role->update($id,$name,$permissions)],200);


            
        }catch(\Exception $ex){



            return response()->json(["message"=>"we have error"],500);

        }

    }

    
    public function getrole(getrole $request){

        try{


            return response()->json(["data"=>$this->role->getrole($request->id)],500);
            
        }catch(\Exception $ex){

            return response()->json(["message"=>"we have error"],500);

        }

    }



    public function deleterole(getrole $request){

        try{

            
            $role=$this->role->delete($request->id);

            return response()->json(["data"=>$role],200);



        }catch(\Exception $ex){



            return response()->json(["message"=>"we have error"],500);

        }


    }


}
