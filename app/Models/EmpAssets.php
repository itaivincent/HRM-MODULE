<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpAssets extends Model
{
    protected $fillable = [
        
        'employeeId',       
        'assetId', 
        'date',
        'condition',
    ];
}
