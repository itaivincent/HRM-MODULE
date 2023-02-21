<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        
        'name',
        'surname',       
        'nationalId', 
        'employeeNumber',
        'dob',
        'startDate',
        'sex',
        'status',
        'reason',
        'department_id',
        'isNotified',       
    ];
}
