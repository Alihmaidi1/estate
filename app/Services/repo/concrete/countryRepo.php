<?php 


namespace App\Services\repo\concrete;

use App\Models\country;
use App\Services\repo\interfaces\countryRepoInterface;

class countryRepo implements countryRepoInterface{



    public function store($name){



        return country::create([

            "name"=>$name
        ]);

    }
 
    
    public function getAllCountry(){


        return country::all();
    }


    public function update($id,$name){

        $country=country::findOrFail($id);
        $country->name=$name;
        $country->save();

        return $country;


    }
    public function getcountry($id){


        return country::findOrFail($id);

    }

    public function delete($id){


        $country=country::findOrFail($id);
        $country1=$country;
        $country->delete();
        return $country1;


    }


}