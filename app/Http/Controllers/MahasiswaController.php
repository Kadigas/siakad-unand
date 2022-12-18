<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        return view('mhs.index', compact('mhs'));
    }

    public function register(){
        return view('mhs.register');
    }
    public function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'name' => 'required|name|unique:users',
            'password' => 'required|min:8'
        ],[
            'name.required' => 'Name cannot be empty',
            'name.required' => 'name cannot be empty',
            'name.name' => 'Please enter valid name',
            'name.unique' => 'This name already registered',
            'password.required' => 'Password cannot be empty',
            'password.min' => 'Password must have atleast 8 characters'
        ]);

        $registerData = [
            'name' => $request->name,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];
        User::create($registerData);

        $loginInformation = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if(Auth::attempt($loginInformation)){
            return Auth::user()->name;
        }
        else{
            return 'failed';
        }
    }
    public function login(){
        return view('mhs.login');
    }
    
    public function signin(Request $request){
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'name field cannot be empty',
            'password.required' => 'Password field cannot be empty'
        ]);

        $loginInformation = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if(Auth::attempt($loginInformation) && (int)$request->name >= 502520000){
            return redirect('/mhs');
        }
        else{
            return redirect('/mhs/login')->withErrors('Username or Password is not valid.');
        }
    }
    public function logout(){
        Auth::logout();
        return 'successfully logout';
    }
}
