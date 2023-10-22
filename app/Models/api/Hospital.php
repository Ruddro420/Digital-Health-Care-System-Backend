<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital_name',
        'phone_no',
        'emergency_no',
        'address',
        'state',
        'zip',
    ];
}