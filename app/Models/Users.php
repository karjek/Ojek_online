<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //

    protected $primaryKey = 'idusers';

    protected $fillable = ['name', 'password', 'email', 'phonenumber'];
}
