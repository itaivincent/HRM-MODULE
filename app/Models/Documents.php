<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = [
        
        'name',       
        'employeeId', 
        'type',
        'path'
    ];
}
