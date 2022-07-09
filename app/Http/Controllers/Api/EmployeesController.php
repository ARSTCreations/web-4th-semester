<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::select('select * from roles r inner join employees e on (r.id = e.role_id);');
        return response()->json([
            'message' => 'Successfully retrieved employees',
            'total' => count($employees),
            'data' => $employees
        ],200);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = DB::select('select * from employees e inner join roles r on (e.role_id = r.id) where e.id = ?;', [$id]);
        if (!$employee) {
            return response()->json([
                'message' => 'Employee not found'
            ],404);
        }
        return response()->json([
            'message' => 'Successfully retrieved employee',
            'data' => $employee
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(JWTAuth::parseToken()->authenticate()->id !=1){
            $validator = Validator::make($request->all(), [
                'role_id' => 'required|integer',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:employees',
                'phone' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $employee = Employees::create($request->all());
            return response()->json([
                'message' => 'Successfully created employee',
                'data' => $employee
            ],201);
        }
        return response([
            'message'=>'You are not authorized to add data!'
        ],401);
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
        if(JWTAuth::parseToken()->authenticate()->id !=1){
            $validator = Validator::make($request->all(), [
                'role_id' => 'required|integer',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:employees,email,'.$id,
                'phone' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $employee = Employees::find($id);
            if (!$employee) {
                return response()->json([
                    'message' => 'Employee not found'
                ],404);
            }
            $employee->update($request->all());
            return response()->json([
                'message' => 'Successfully updated employee',
                'data' => $employee
            ],200);
        }
        return response([
            'message'=>'You are not authorized to update data!'
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(JWTAuth::parseToken()->authenticate()->id !=1){
            $employee = Employees::find($id);
            if (!$employee) {
                return response()->json([
                    'message' => 'Employee not found'
                ],404);
            }
            $employee->delete();
            return response()->json([
                'message' => 'Successfully deleted employee'
            ],200);
        }
        return response([
            'message'=>'You are not authorized to delete data!'
        ],401);
    }
}
