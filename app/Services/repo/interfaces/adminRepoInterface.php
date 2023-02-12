<?php

namespace App\Services\repo\interfaces;


interface adminRepoInterface{

    public function getAdminByEmail($email);

    public function getAllAdmin();



}