<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class admin extends  Authenticatable
{
    use HasFactory,HasApiTokens,HasUuids;
    
    public $fillable = ["name","password","permission","email"];
    public $hidden = ["created_at","updated_at","password"];

}
