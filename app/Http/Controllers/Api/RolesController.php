<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Roles;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        return response()->json([
            'message' => 'Successfully retrieved roles',
            'total' => count($roles),
            'data' => $roles
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
        $role = Roles::find($id);
        return response()->json([
            'message' => 'Successfully retrieved role',
            'data' => $role
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
        if (JWTAuth::parseToken()->authenticate()->id !=1){
            $validator = Validator::make($request->all(), [
                'role_title' => 'required|string|max:255',
                'role_description' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $role = Roles::create([
                'role_title' => $request->role_title,
                'role_description' => $request->role_description,
            ]);
            return response()->json([
                'message' => 'Successfully created role',
                'data' => $role
            ],201);
        }else{
            return response()->json([
                'message' => 'You are not authorized to add data'
            ],401);
        }
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
        if (JWTAuth::parseToken()->authenticate()->id !=1){
            $validator = Validator::make($request->all(), [
                'role_title' => 'required|string|max:255',
                'role_description' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $role = Roles::find($id);
            $role->role_title = $request->role_title;
            $role->role_description = $request->role_description;
            $role->save();
            return response()->json([
                'message' => 'Successfully updated role',
                'data' => $role
            ],200);
        }else{
            return response()->json([
                'message' => 'You are not authorized to update data'
            ],401);
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
        if (JWTAuth::parseToken()->authenticate()->id !=1){
            $role = Roles::find($id);
            $role->delete();
            return response()->json([
                'message' => 'Successfully deleted role'
            ],200);
        }else{
            return response()->json([
                'message' => 'You are not authorized to delete data'
            ],401);
        }
    }
}
