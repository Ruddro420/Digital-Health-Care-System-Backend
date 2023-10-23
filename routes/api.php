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
Route::get('/getBlood', [ManageBlood::class, 'getAll']);
// For Ambulance
Route::post('/storeAmbulance', [ManageAmbulance::class, 'store']);
Route::get('/getOnlyAmbulance/{id}', [ManageAmbulance::class, 'getOnly']);
Route::get('/getAmbulance', [ManageAmbulance::class, 'getAll']);
// For Doctors
Route::post('/storeDoctor', [ManageDoctors::class, 'store']);
Route::get('/getOnlyDoctor/{id}', [ManageDoctors::class, 'getOnly']);
Route::get('/getDoctor', [ManageDoctors::class, 'getAll']);
// For Emergency
Route::post('/storeEmergency', [ManageEmergency::class, 'store']);
Route::get('/getOnlyEmergency/{id}', [ManageEmergency::class, 'getOnly']);
Route::get('/getEmergency', [ManageEmergency::class, 'getAll']);
// For Doctors
Route::post('/storeHospital', [ManageHospital::class, 'store']);
Route::get('/getOnlyHospital/{id}', [ManageHospital::class, 'getOnly']);
Route::get('/getHospital', [ManageHospital::class, 'getAll']);
// For Medicine
Route::post('/storeMedicine', [ManageMedicine::class, 'store']);
Route::get('/getOnlyMedicine/{id}', [ManageMedicine::class, 'getOnly']);
Route::get('/getMedicine', [ManageMedicine::class, 'getAll']);
