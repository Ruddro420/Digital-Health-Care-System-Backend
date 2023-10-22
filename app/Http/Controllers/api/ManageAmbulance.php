<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\api\Ambulance;
use App\Http\Controllers\Controller;

class ManageAmbulance extends Controller
{
     // Store Function
     public function store(Request $request){
        $info = new Ambulance();
        $info->uid = $request->uid;
        $info->driver_name = $request->driver_name;
        $info->phone_no = $request->phone_no;
        $info->license_no = $request->license_no;
        $info->address = $request->address;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->aggree = 'Yes';
        $info->status = 0;
        $info->save();

        if($info){
            return response()->json([
                'status' => 200,
                'message' => 'Ambulance Info Created Successfuly'
            ],200);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ],500);
        }
    }
}