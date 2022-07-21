<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;


class AuthController extends Controller
{
    public function __construct ()
    {
        //$this->middleware('jwt.verify', ['except' => ['login', 'register']]);
        $this->middleware('jwt.verify', ['except' => ['login']]);
    }

    public function register(){
        $validator = Validator::make(request()->all(), [
            // for users database
            'name' => 'required|string|max:255', // also a fullname
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            // for employees database
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
            // return response()->json($validator->errors(), 400);
            return redirect('/register')
                ->withErrors($validator->errors(), 400);
        }
        Employee::create([
            'full_name' => request('name'),
            'working_status' => request('working_status'),
            'salary' => request('salary'),
            'phone' => request('phone'),
            'address' => request('address'),
            'birth_place' => request('birth_place'),
            'birth_date' => request('birth_date'),
            'gender' => request('gender'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
        ]);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        // $token = auth()->login($user);
        // setcookie('token', $token, time() + (86400 * 30), "/");
        // return $this->respondWithToken($token);
        return redirect('/login')
            ->with('success', 'You have successfully registered! Please Login',);
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
        //return $this->respondWithToken($token);
        return redirect('/dashboard?login=true');
    }

    public function logout(){
        auth()->logout();
        \setcookie('token', '', time() - (86400 * 30), "/");
        //return response()->json(['message' => 'Successfully logged out']);
        return redirect('/login');
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

    public function getProfile(){
        $authid = auth()->user()->id;
        $profilefromauth = DB::select("SELECT * FROM employees e INNER JOIN users u on (e.id = u.employee_id) INNER JOIN jobs j on (e.job_id = j.id) INNER JOIN departments d on (j.id = d.id) WHERE e.id = ?", [$authid]);
        return view('profile', compact('profilefromauth'));
    }

    public function getProfileDash(){
        $authid = auth()->user()->id;
        $profilefromauth = DB::select("SELECT * FROM employees e INNER JOIN users u on (e.id = u.employee_id) INNER JOIN jobs j on (e.job_id = j.id) INNER JOIN departments d on (j.id = d.id) WHERE e.id = ?", [$authid]);
        return view('dashboard', compact('profilefromauth'));
    }

    public function getSurat(){
        $authid = auth()->user()->id;
        $suratfromauth = DB::select("SELECT * FROM files");
        return view('permohonan_surat', compact('suratfromauth'));
    }

    public function getPresensi(){
        $authid = auth()->user()->id;
        $presensifromauth = DB::select("SELECT * FROM presences p INNER JOIN employees e ON (p.employee_id = e.id)");
        return view('presensi', compact('presensifromauth'));
    }
}
