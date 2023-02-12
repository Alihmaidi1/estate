<?php

namespace App\Services\Authentication\concrete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Services\Authentication\interfaces\Authentication;

class admin implements Authentication{

    public function login($email,$password){

            $client= DB::table('oauth_clients')->where("provider","admins")->first();            
            $token=Http::asForm()->withHeaders(["apipassword"=>env("api_password")])->post(request()->root()."/oauth/token",[
                        'grant_type' => 'password',
                        'client_id' =>$client->id,
                        'client_secret' => $client->secret ,
                        'username' => $email ,
                        'password' => $password
                    ]);
            if ($token->status() != 200) {
                    throw new HttpResponseException(response()->json(["message"=>$token],500));
            }

        return $token->json();
                
        }
        

}