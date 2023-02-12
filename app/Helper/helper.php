<?php

use Illuminate\Support\Facades\Storage;
use File;



    function saveimage($image){

        $name = time().rand(1000000, 9999999) . "." . $image->getClientOriginalExtension();
        Storage::disk("public")->putFileAs("temp",$image,$name);
        return $name;


    }


    // function movefile($from,$to){


    // File::move(public_path($from), public_path($to));

        

    // }

