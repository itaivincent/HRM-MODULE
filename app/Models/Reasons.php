<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reasons extends Model
{
    protected $fillable = [   

        'name',       
        'description', 
        'password',
    ];
}
