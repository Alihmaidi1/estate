<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\admin\loginRequest;
use App\Models\admin as ModelsAdmin;
use Illuminate\Http\Request;

class admin extends Controller
{

    public function login(loginRequest $request){


        try{

            $token=tokenInfo($request->email,$request->password,"admins");
            if($token->status()==200){
            $admin=ModelsAdmin::where("email",$request->email)->first();
            $admin->token_info=$token->json();
            return response()->json(["data"=>$admin,"message"=>"you are login successfully"]);

            }else{
                return response()->json(["message"=>$token->status()],500);
            }

        }catch(\Exception $ex){

            return response()->json(["message"=>$ex->getMessage()],500);


        }



        
    }






}
