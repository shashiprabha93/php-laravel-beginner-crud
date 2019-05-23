<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'firstName', 'lastName','address','email','designation','phoneNo'
    ];
}
