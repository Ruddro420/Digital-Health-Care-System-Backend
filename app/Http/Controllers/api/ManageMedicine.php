<?php

namespace App\Http\Controllers\api;

use App\Models\api\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageMedicine extends Controller
{
   // Store Function
   public function store(Request $request){
    $info = new Medicine();
    $info->shop_name = $request->shop_name;
    $info->phone_no = $request->phone_no;
    $info->owner_name = $request->owner_name;
    $info->license_no = $request->license_no;
    $info->address = $request->address;
    $info->state = $request->state;
    $info->zip = $request->zip;
    $info->aggree = $request->aggree;
    $info->status = 0;
    $info->save();

    if($info){
        return response()->json([
            'status' => 200,
            'message' => 'Medicine Info Created Successfuly'
        ],200);
    }else{
        return response()->json([
            'status' => 500,
            'message' => 'Something Went Wrong'
        ],500);
    }
}
}