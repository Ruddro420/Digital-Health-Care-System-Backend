<?php

namespace App\Http\Controllers\api;

use App\Models\api\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageDoctors extends Controller
{
    // Store Function
    public function store(Request $request)
    {
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

        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Doctors Info Created Successfuly'
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

        $info = Doctor::where('uid', $id)->get();
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
    // get All data
    public function getAll()
    {
        $info = Doctor::where('status', 1)->get();
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
        $info = Doctor::all();
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
        $info = Doctor::find($id);
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
