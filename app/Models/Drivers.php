<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    //

    protected $primaryKey = 'iddrivers';

    protected $fillable = ['name', 'password', 'email', 'phonenumber'];
}
