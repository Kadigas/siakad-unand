<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::where('user_id', Auth::id())->first();
        return view('dosen.index', compact('dosen'));
    }

    public function datamhs(){
        $dosen = Dosen::where('user_id', Auth::id())->first();
        $mhs = DB::table('mahasiswa')->get();
        return view('dosen.data-mahasiswa.index', compact('dosen'))->with('mhs', $mhs);
    }

    public function pnilai()
    {
        $dosen = Dosen::where('user_id', Auth::id())->first();
        return view('dosen.pengelolaan-nilai.index', compact('dosen'));
    }

    public function pengisian_nilai()
    {
        $dosen = Dosen::where('user_id', Auth::id())->first();
        $mhs = Mahasiswa::all();
        return view('dosen.pengisian-nilai.index', compact('dosen', 'mhs'));
    }
    
    public function changeName(Request $request)
    {
        $dosen = Dosen::where('user_id', Auth::id())->first();

        $request->validate([
            'nama' => 'required',
        ],[
            'nama.required' => 'Name cannot be empty'
        ]);

        $dosen->update([
            'nama' => $request->nama
        ]);
        return view('dosen.index', compact('dosen'));
    }
}
