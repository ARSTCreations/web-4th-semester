<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select('SELECT * FROM jobs');
        $data = json_decode(json_encode($result), true);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(JWTAuth::parseToken()->authenticate()->is_admin == 1){
            $validator = Validator::make($request->all(), [
                'department_id' => 'required|integer',
                'job_title' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $job = Jobs::create($request->all());
            return response()->json($job, 201);
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = DB::select('SELECT * FROM jobs WHERE id = ?', [$id]);
        $data = json_decode(json_encode($result), true);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(JWTAuth::parseToken()->authenticate()->is_admin == 1){
            $validator = Validator::make($request->all(), [
                'department_id' => 'required|integer',
                'job_title' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $job = Jobs::findOrFail($id);
            $job->update($request->all());
            return response()->json($job, 200);
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(JWTAuth::parseToken()->authenticate()->is_admin == 1){
            $job = Jobs::findOrFail($id);
            $job->delete();
            return response()->json(['status' => 'success'], 200);
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }
}
