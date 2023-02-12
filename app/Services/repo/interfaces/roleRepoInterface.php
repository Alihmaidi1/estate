<?php 

namespace App\Services\repo\interfaces;

interface roleRepoInterface{



 
    public function store($name,$permissions);

    public function getallrole();


    public function update($id,$name,$permissions);


    public function getrole($id);


    public function delete($id);


}