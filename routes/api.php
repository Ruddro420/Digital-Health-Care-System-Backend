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
Route::get('/getSAblood', [ManageBlood::class, 'getSuperAdminData']);
Route::post('/updateBlood/{id}', [ManageBlood::class, 'updateData']);
// For Ambulance
Route::post('/storeAmbulance', [ManageAmbulance::class, 'store']);
Route::get('/getOnlyAmbulance/{id}', [ManageAmbulance::class, 'getOnly']);
Route::get('/getSAambulance', [ManageAmbulance::class, 'getSuperAdminData']);
Route::get('/getAmbulance', [ManageAmbulance::class, 'getAll']);
Route::post('/updateAmbulance/{id}', [ManageAmbulance::class, 'updateData']);
// For Doctors
Route::post('/storeDoctor', [ManageDoctors::class, 'store']);
Route::get('/getOnlyDoctor/{id}', [ManageDoctors::class, 'getOnly']);
Route::get('/getSAdoctor', [ManageDoctors::class, 'getSuperAdminData']);
Route::get('/getDoctor', [ManageDoctors::class, 'getAll']);
Route::post('/updateDoctor/{id}', [ManageDoctors::class, 'updateData']);
// For Emergency
Route::post('/storeEmergency', [ManageEmergency::class, 'store']);
Route::get('/getOnlyEmergency/{id}', [ManageEmergency::class, 'getOnly']);
Route::get('/getSAemergency', [ManageEmergency::class, 'getSuperAdminData']);
Route::get('/getEmergency', [ManageEmergency::class, 'getAll']);
Route::post('/updateEmergency/{id}', [ManageEmergency::class, 'updateData']);
// For Doctors
Route::post('/storeHospital', [ManageHospital::class, 'store']);
Route::get('/getOnlyHospital/{id}', [ManageHospital::class, 'getOnly']);
Route::get('/getSAhospital', [ManageHospital::class, 'getSuperAdminData']);
Route::get('/getHospital', [ManageHospital::class, 'getAll']);
Route::post('/updateHospital/{id}', [ManageHospital::class, 'updateData']);
// For Medicine
Route::post('/storeMedicine', [ManageMedicine::class, 'store']);
Route::get('/getOnlyMedicine/{id}', [ManageMedicine::class, 'getOnly']);
Route::get('/getSAmedicine', [ManageMedicine::class, 'getSuperAdminData']);
Route::get('/getMedicine', [ManageMedicine::class, 'getAll']);
Route::post('/updateMedicine/{id}', [ManageMedicine::class, 'updateData']);
