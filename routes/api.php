<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ManageBlood;
use App\Http\Controllers\api\ManageDoctors;
use App\Http\Controllers\api\ManageHospital;
use App\Http\Controllers\api\ManageMedicine;
use App\Http\Controllers\api\ManageAmbulance;
use App\Http\Controllers\api\ManageEmergency;


// For Blood
Route::post('/storeBlood', [ManageBlood::class, 'store']);
Route::get('/getOnlyBlood/{id}', [ManageBlood::class, 'getOnly']);
// For Ambulance
Route::post('/storeAmbulance', [ManageAmbulance::class, 'store']);
Route::get('/getOnlyAmbulance/{id}', [ManageAmbulance::class, 'getOnly']);
// For Doctors
Route::post('/storeDoctor', [ManageDoctors::class, 'store']);
Route::get('/getOnlyDoctor/{id}', [ManageDoctors::class, 'getOnly']);
// For Emergency
Route::post('/storeEmergency', [ManageEmergency::class, 'store']);
Route::get('/getOnlyEmergency/{id}', [ManageEmergency::class, 'getOnly']);
// For Doctors
Route::post('/storeHospital', [ManageHospital::class, 'store']);
Route::get('/getOnlyHospital/{id}', [ManageHospital::class, 'getOnly']);
// For Medicine
Route::post('/storeMedicine', [ManageMedicine::class, 'store']);
Route::get('/getOnlyMedicine/{id}', [ManageMedicine::class, 'getOnly']);
