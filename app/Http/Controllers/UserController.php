<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Code here.
    }
     
    public function index()
    {
        $result = User::all();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($result);
    }
     
    public function store(Request $request)
    {
        $result = User::create([
            'email' => $request->email,
            'smp' => $request->smp
        ]);

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response($data);
    }

    public function update(Request $request, $id)
    {
        $result = User::where('id',$id)->first();
        $result->email = $request->input('email');
        $result->smp = $request->input('smp');
        $result->password = Hash::make($request->input('password'));
        $result->save();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }
}