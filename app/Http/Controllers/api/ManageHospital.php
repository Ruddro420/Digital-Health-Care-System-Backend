<?php

namespace App\Http\Controllers\api;

use App\Models\api\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageHospital extends Controller
{
    // Store Function
    public function store(Request $request)
    {
        $info = new Hospital();
        $info->uid = $request->uid;
        $info->hospital_name = $request->hospital_name;
        $info->phone_no = $request->phone_no;
        $info->emergency_no = $request->emergency_no;
        $info->address = $request->address;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->aggree = 'Yes';
        $info->status = 0;
        $info->save();

        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Hospital Info Created Successfuly'
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

        $info = Hospital::where('uid', $id)->get();
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
