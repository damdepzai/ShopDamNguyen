<?php

namespace App\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table ='admins';
    protected $fillable=['name','email','password'];
    protected $guarded=[''];
}
