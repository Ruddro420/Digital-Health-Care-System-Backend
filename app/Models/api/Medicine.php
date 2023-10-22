<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'shop_name',
        'phone_no',
        'owner_name',
        'license_no',
        'address',
        'state',
        'zip',
    ];
}