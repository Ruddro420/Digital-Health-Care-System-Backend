<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\api\Blood;
use Illuminate\Http\Request;

class ManageBlood extends Controller
{
    // Store Function
    public function store(Request $request)
    {
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

        if ($info) {
            return response()->json([
                'status' => 200,
                'message' => 'Blood Info Created Successfuly'
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

        $bloodInfo = Blood::where('uid', $id)->get();
        // Check Data is avaiable or not
        if ($bloodInfo->count() > 0) {
            $data = [
                'status' => 200,
                'info' => $bloodInfo
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
        $info = Blood::where('status', 1)->get();
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
        $info = Blood::all();
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
        $info = Blood::find($id);
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
