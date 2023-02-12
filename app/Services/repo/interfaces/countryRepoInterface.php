<?php 


namespace App\Services\repo\interfaces;

interface countryRepoInterface{



    public function store($name);


    public function getAllCountry();



    public function update($id,$name);


    public function getcountry($id);



    public function delete($id);


}