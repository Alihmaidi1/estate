<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin;
class role extends Model
{
    use HasFactory;
    use HasUuids;


    public $fillable=["name","permissions"];

    public $hidden=["created_at","updated_at"];



    public function admins(){

        return $this->hasMany(admin::class,"role_id");
    }

    public function getPermissionsAttribute($value){

        return json_decode($value);

    }

    






}
