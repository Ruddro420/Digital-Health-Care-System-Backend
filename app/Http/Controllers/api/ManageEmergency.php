<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\api\Emergency;
use App\Http\Controllers\Controller;

class ManageEmergency extends Controller
{
    // Store Function
    public function store(Request $request){
        $info = new Emergency();
        $info->uid = $request->uid;
        $info->name = $request->name;
        $info->phone_no = $request->phone_no;
        $info->address = $request->address;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->aggree = 'Yes';
        $info->status = 0;
        $info->save();

        if($info){
            return response()->json([
                'status' => 200,
                'message' => 'Emergency Info Created Successfuly'
            ],200);
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ],500);
        }
    }
}