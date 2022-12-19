<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Modul;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TugasController extends Controller
{
    function index(){
        $user = Mahasiswa::where('user_id', Auth::id())->first();
        if($user){
            return view('mhs.tugas');
        }
        $user = Dosen::where('user_id', Auth::id())->first();
        if($user){
            return view('dosen.tugas');
        }
        $user = Administrator::where('user_id', Auth::id())->first();
        if($user){
            return view('admin.tugas');
        }
    }
    public function show($id, $tid)
    {
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        if($mhs){
            $modul = Modul::findorfail($id);
            $tgs = Tugas::findorfail($tid);
            return view('mhs.tugas.show', compact('mhs', 'modul', 'tgs'));
        }
    }

    public function showD($id)
    {
        $dosen = Dosen::where('user_id', Auth::id())->first();
        if($dosen){
            $mhs = Mahasiswa::findorfail($id);
            $tgs = DB::table('tugas')->where('mahasiswa_id', $id)->get();
            return view('dosen.tugas-mahasiswa.show', compact('dosen', 'mhs', 'tgs'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'sid' => 'required',
            'jenis' => 'required',
            'modul' => 'required',
            'nilai' => 'required|integer',
        ],
        [
            'sid.required' => 'ID can\'t be empty!',
            'jenis.required' => 'Jenis can\'t be empty!',
            'modul.required' => 'Modul can\'t be empty!',
            'nilai.required' => 'Nilai can\'t be empty!',
        ]);

        return Redirect::back()->withErrors('Berhasil mengisi nilai.');
    }
}
