<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'uid',
        'doctors_name',
        'phone_no',
        'specialist',
        'license_no',
        'address',
        'state',
        'zip',
    ];
}