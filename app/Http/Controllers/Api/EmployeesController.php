<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select('SELECT * FROM employees');
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
        // Do it via Register Duh..
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = DB::select('SELECT * FROM employees WHERE id = ?', [$id]);
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
                'job_id' => 'required|integer',
                'working_status' => 'required|string|max:255',
                'salary' => 'required|integer',
                'phone' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'birth_place' => 'required|string|max:255',
                'birth_date' => 'required|date',
                'gender' => 'required|boolean',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $employee = Employees::findOrFail($id);
            $employee->update($request->all());
            return response()->json($employee, 200);
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
            $employee = Employees::findOrFail($id);
            $employee->delete();
            return response()->json(['message' => 'Employee deleted successfully'], 200);
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }
}
