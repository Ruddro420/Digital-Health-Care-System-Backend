<?php

namespace App\Http\Controllers\api;

use App\Models\api\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageMedicine extends Controller
{
    // Store Function
    public function store(Request $request)
    {
        $info = new Medicine();
        $info->uid = $request->uid;
        $info->shop_name = $request->shop_name;
        $info->phone_no = $request->phone_no;
        $info->owner_name = $request->owner_name;
        $info->license_no = $request->license_no;
        $info->address = $request->address;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->aggree = 'Yes';
        $info->status = 0;
        $info->save();

        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Medicine Info Created Successfuly'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ], 500);
        }
    }
    // get only data
    public function getOnly($id)
    {

        $info = Medicine::where('uid', $id)->get();
        // Check Data is avaiable or not
        if ($info->count() > 0) {
            $data = [
                'status' => 200,
                'info' => $info
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Records Found'
            ];
            return response()->json($data, 404);
        }
    }
}
