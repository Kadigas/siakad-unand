<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        return view('mhs.index', compact('mhs'));
    }
    public function logbook(){
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        return view('mhs.logbook.index', compact('mhs'));
    }
    public function tugas(){
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        return view('mhs.tugas.index', compact('mhs'));
    }
    public function modul(){
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        return view('mhs.tugas.index', compact('mhs'));
    }

    public function show(){
        
    }

    public function update(Request $request)
    {
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();

        $request->validate([
            'nama' => 'required',
            'angkatan' => 'required'
        ],[
            'nama.required' => 'Name cannot be empty',
            'angkatan.required' => 'Angkatan cannot be empty'
        ]);

        $mhs->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan
        ]);
        return Redirect::back();
    }

}
