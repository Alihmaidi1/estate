<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\country\getcountry;
use App\Http\Requests\api\country\store;
use App\Http\Requests\api\country\update;
use App\Services\repo\interfaces\countryRepoInterface;
use Illuminate\Http\Request;

class country extends Controller
{


    public $country;
    public function __construct(countryRepoInterface $country){


        $this->country=$country;

    }

    public function store(store $request){

        try{

            $name=$request->name;
            return response()->json(["data"=>$this->country->store($name)],200);

        }catch(\Exception $ex){


            return response()->json(["message"=>$ex->getMessage()],500);

        }


    }



    public function getallcountry(Request $request){
        try{

            
            return response()->json(["data"=>$this->country->getAllCountry()],200);


        }catch(\Exception $ex){

                return response()->json(["message"=>"we have error"],500);

        }


    }




    public function update(update $request){

        try{


            $id=$request->id;
            $name=$request->name;
            return response()->json(["data"=>$this->country->update($id,$name)],200);



        }catch(\Exception $ex){



            return response()->json(["message"=>"we have error"],500);


        }


    }



    public function getcountry(getcountry $request){


        try{


            return response()->json(["data"=>$this->country->getcountry($request->id)],200);

        }catch(\Exception $ex){



            return response()->json(["message"=>"we have error"],500);

        }



    }



    public function deletecountry(getcountry $request){

        try{



            return response()->json(["data"=>$this->country->delete($request->id)],200);


        }catch(\Exception $ex){



            return response()->json(["message"=>"we have error"],500);


        }
    }


}
