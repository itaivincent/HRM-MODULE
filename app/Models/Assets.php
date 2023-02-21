<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $fillable = [

        'name',       
        'type', 
        'brand',
        'assetCode',
        'status',
        'condition',
        'dateAdded',
        'description',
    ];
}
