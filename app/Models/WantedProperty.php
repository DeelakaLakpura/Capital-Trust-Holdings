<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WantedProperty extends Model
{

    use HasFactory;
    protected $fillable = [
        'is_buy',
        'property_type',
        'users_id',
        'location',
        'requirement',
        'status',

    ];

}
