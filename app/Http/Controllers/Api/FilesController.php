<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Files;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select('SELECT * FROM files');
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
                'title' => 'required|string|max:255',
                'file.*' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar,7z',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $upload = $request->file('file');
            $filename = $upload->getClientOriginalName();
            $destinationPath = 'files/';
            $upload->move($destinationPath, $filename);

            $file = DB::table('files')->insert([
                'employee_id' => JWTAuth::parseToken()->authenticate()->id,
                'url' => "/files/".$filename,
                'title' => $request->title,
            ]);
            // return response()->json($file, 201);
            return redirect('/permohonan_surat');
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
        $result = DB::select('SELECT * FROM files WHERE id = ?', [$id]);
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
                // 'employee_id' => 'required|integer',
                // 'url' => 'required|string|max:255',
                // 'title' => 'required|string|max:255',
                'status' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            $file = Files::findOrFail($id);
            $file->update($request->all());
            // return response()->json($file, 200);
            return redirect('/permohonan_surat');
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
            $file = Files::findOrFail($id);
            $file->delete();
            // return response()->json(['status' => 'success'], 200);
            return redirect('/permohonan_surat');
        }else{
            return response()->json(['error' => 'You are not authorized to perform this action'], 401);
        }
    }
}
