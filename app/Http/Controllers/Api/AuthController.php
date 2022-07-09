<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function __construct ()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    public function register(){
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        $token = auth()->login($user);
        return $this->respondWithToken($token);
    }

    public function login(){
        $validator = Validator::make(request()->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $credentials = request()->only('email', 'password');
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        \setcookie('token', $token, time() + (86400 * 30), "/");
        return $this->respondWithToken($token);
    }

    public function logout(){
        auth()->logout();
        \setcookie('token', '', time() - (86400 * 30), "/");
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function me(){
        return response()->json(auth()->user());
    }

    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
