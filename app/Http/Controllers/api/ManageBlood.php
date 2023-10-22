<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\api\Blood;
use Illuminate\Http\Request;

class ManageBlood extends Controller
{
     // Store Function
     public function store(Request $request){
        $info = new Blood();
        $info->uid = $request->uid;
        $info->donate_date = $request->donate_date;
        $info->blood_group = $request->blood_group;
        $info->donor_name = $request->donor_name;
        $info->phone_no = $request->phone_no;
        $info->address = $request->address;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->corona = $request->corona;
        $info->hepatitis = $request->hepatitis;
        $info->aggree = 'Yes';
        $info->status = 0;
        $info->save();

        if($info){
            return response()->json([
                'status' => 200,
                'message' => 'Blood Info Created Successfuly'
            ],200);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ],500);
        }
    }
}