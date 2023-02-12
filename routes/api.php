<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\admin;
use App\Http\Controllers\api\country;
use App\Http\Controllers\role;

Route::post("/admin/login",[admin::class,"login"]);


Route::group(["middleware"=>"auth:api"],function(){

    Route::get("/admin/getalladmin",[admin::class,"getalladmin"])->middleware("can:admin");
    Route::get("/admin/info",[admin::class,"info"]);



    Route::post("/admin/addrole",[role::class,"store"])->middleware("can:role");
    Route::get("/admin/getallrole",[role::class,"getallrole"])->middleware("can:role");
    Route::post("/admin/editrole",[role::class,"update"])->middleware("can:role");
    Route::get("/admin/getrole",[role::class,"getrole"])->middleware("can:role");
    Route::post("/admin/deleterole",[role::class,"deleterole"])->middleware("can:role");
    



    Route::post("/admin/addcountry",[country::class,"store"])->middleware("can:country");
    Route::post("/admin/editcountry",[country::class,"update"])->middleware("can:country");
    Route::post("/admin/deletecountry",[country::class,"deletecountry"])->middleware("can:country");
    

});

Route::get("/admin/getallcountry",[country::class,"getallcountry"]);
Route::get("/admin/getcountry",[country::class,"getcountry"]);
