<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class ProfileController extends Controller
{
    public function show(){
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        if($mhs){
            return view('mhs.profile.show', compact('mhs'));
        }
        $dosen = Dosen::where('user_id', Auth::id())->first();
        if($dosen){
            return view('dosen.profile.show', compact('dosen'));
        }
    }
}
