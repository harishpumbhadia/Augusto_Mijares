<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersprofile extends Model
{
    protected $fillable=['id','firstname','address','role','email','password'];
}
