<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ManageBlood;
use App\Http\Controllers\api\ManageDoctors;
use App\Http\Controllers\api\ManageHospital;
use App\Http\Controllers\api\ManageMedicine;
use App\Http\Controllers\api\ManageAmbulance;
use App\Http\Controllers\api\ManageEmergency;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */

 // For Blood
  Route::post('/storeBlood', [ManageBlood::class, 'store']);
  Route::get('/getOnlyBlood', [ManageBlood::class, 'getOnly']);
  // For Ambulance
  Route::post('/storeAmbulance', [ManageAmbulance::class, 'store']);
  // For Doctors
  Route::post('/storeDoctor', [ManageDoctors::class, 'store']);
  // For Emergency
  Route::post('/storeEmergency', [ManageEmergency::class, 'store']);
  // For Doctors
  Route::post('/storeHospital', [ManageHospital::class, 'store']);
  // For Medicine
  Route::post('/storeMedicine', [ManageMedicine::class, 'store']);