<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = [
        'uid',
        'name',
        'phone_no',
        'address',
        'state',
        'zip',
    ];
}