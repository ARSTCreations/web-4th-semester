<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departments;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select('SELECT * FROM departments');
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
                'department_name' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $department = Departments::create($request->all());
            return response()->json($department, 201);
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
        $result = DB::select('SELECT * FROM departments WHERE id = ?', [$id]);
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
                'department_name' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $department = Departments::findOrFail($id);
            $department->update($request->all());
            return response()->json($department, 200);
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
            $department = Departments::findOrFail($id);
            $department->delete();
            return response()->json(null, 204);
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }
}
