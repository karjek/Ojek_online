<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    //

    protected $primaryKey = 'idtransactions';

    protected $fillable = ['loc_from', 'loc_to', 'charge', 'status'];
}
