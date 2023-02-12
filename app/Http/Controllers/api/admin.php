<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\admin\loginRequest;
use App\Models\admin as ModelsAdmin;
use Illuminate\Http\Request;
use App\Services\Authentication\interfaces\Authentication as AuthenticationInterface;
use App\Services\repo\interfaces\adminRepoInterface;

class admin extends Controller
{

    public $authentication;
    public $admin;
    public function __construct(AuthenticationInterface $authentication,adminRepoInterface $admin){

        $this->authentication = $authentication;
        $this->admin = $admin;
    }

    public function login(loginRequest $request){

        try{

            $email = $request->email;
            $password = $request->password;
            $token=$this->authentication->login($email,$password);
            $admin=$this->admin->getAdminByEmail($email);
            $admin->token_info=$token;
            return response()->json(["data"=>$admin,"message"=>"you are login successfully"]);              
        }catch(\Exception $ex){
            return response()->json(["message"=>$ex->getMessage()],500);
        }



        
    }






}
