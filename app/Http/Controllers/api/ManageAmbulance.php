<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\api\Ambulance;
use App\Http\Controllers\Controller;

class ManageAmbulance extends Controller
{
    // Store Function
    public function store(Request $request)
    {
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

        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Ambulance Info Created Successfuly'
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

        $ambulanceInfo = Ambulance::where('uid', $id)->get();
        // Check Data is avaiable or not
        if ($ambulanceInfo->count() > 0) {
            $data = [
                'status' => 200,
                'info' => $ambulanceInfo
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
    // get All data
    public function getAll()
    {
        $info = Ambulance::where('status', 1)->get();
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
    // for get supper admin data
    public function getSuperAdminData()
    {
        $info = Ambulance::all();
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
    // Update data
    public function updateData($id)
    {
        $info = Ambulance::find($id);
        /*  $info->status = '1'; */

        if ($info->status == '1') {
            $info->status = '0';
        } else if ($info->status == '0') {
            $info->status = '1';
        }
        $info->save();
        // Check Data is avaiable or not
        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Update Successfuly'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something Went Wrong'
            ], 500);
        }
    }
}
