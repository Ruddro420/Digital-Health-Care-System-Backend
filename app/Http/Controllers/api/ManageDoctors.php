<?php

namespace App\Http\Controllers\api;

use App\Models\api\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageDoctors extends Controller
{
     // Store Function
     public function store(Request $request){
        $info = new Doctor();
        $info->uid = $request->uid;
        $info->doctors_name = $request->doctors_name;
        $info->phone_no = $request->phone_no;
        $info->specialist = $request->specialist;
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
                'message' => 'Doctors Info Created Successfuly'
            ],200);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ],500);
        }
    }
}