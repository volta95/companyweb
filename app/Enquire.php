<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquire extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'message',
        'file',
        'token',
        'served',
    ];
}
