<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    protected $fillable = [
        'uid',
        'driver_name',
        'phone_no',
        'license_no',
        'address',
        'state',
        'zip',
    ];
}