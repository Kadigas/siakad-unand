<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModulController extends Controller
{
    function index(){
        $user = Mahasiswa::where('user_id', Auth::id())->first();
        if($user){
            return view('mhs.modul');
        }
        $user = Dosen::where('user_id', Auth::id())->first();
        if($user){
            return view('dosen.modul');
        }
        $user = Administrator::where('user_id', Auth::id())->first();
        if($user){
            return view('admin.modul');
        }
    }
}
