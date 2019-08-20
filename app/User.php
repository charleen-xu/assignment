<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $table = "users";
    //protected $fillable = ['name','email'];
    protected $fillable = ['name','email','email_verified_at','password'];
}
