<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $fillable = [
        'uid',
        'donate_date',
        'blood_group',
        'donor_name',
        'address',
        'state',
        'zip',
        'corona',
        'hepatitis',
        'aggree',
        'status',
        'phone_no'
    ];
}