<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class admin extends  Authenticatable
{
    use HasFactory,HasApiTokens,HasUuids;
    
    public $fillable = ["name","password","role_id","email"];
    public $hidden = ["created_at","updated_at","password"];




    public function role(){


        return $this->belongsTo(role::class,"role_id");
    }



}
