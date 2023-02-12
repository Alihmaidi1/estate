<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\admin;
use App\Http\Controllers\role;

Route::post("/admin/login",[admin::class,"login"]);


Route::group(["middleware"=>"auth:api"],function(){

    Route::get("/admin/getalladmin",[admin::class,"getalladmin"])->middleware("can:admin");
    Route::get("/admin/info",[admin::class,"info"]);



    Route::post("/admin/addrole",[role::class,"store"]);
    

});
