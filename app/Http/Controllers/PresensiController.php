<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    function index(){
        $mhs = Mahasiswa::where('user_id', Auth::id())->first();
        if($mhs){
            return view('mhs.presensi.index', compact('mhs'));
        }
        $dosen = Dosen::where('user_id', Auth::id())->first();
        if($dosen){
            return view('dosen.presensi.index', compact('dosen'));
        }
        $admin = Administrator::where('user_id', Auth::id())->first();
        if($admin){
            return view('admin.presensi.index', compact('admin'));
        }
    }

    function retrieve_presensi(Request $request)
    {
        $target_date = strtotime($request->date);
        
        $user = Dosen::where('user_id', Auth::id())->first();
        if($user){
            $dosen_id = Auth::id();
            return Dosen::mahasiswa_bimbingan_dosen($dosen_id)->hasMany(Presensi::class)->where('presensi.tanggal', $target_date)->pluck('presensi.id', 'presensi.mahasiswa_id', 'presensi.status', 'presensi.keterangan');
            // returns presensi anak bimbingan
        }
    }
    
    function add_presensi(Request $request)
    {
        $user = Mahasiswa::where('user_id', Auth::id())->first();
        if($user) {
            $curr_date = date("Y-m-d");
            $presensiInformation = [
                'status' => $request->name,
                'tanggal' => $curr_date,
                'keterangan' => $request->password,
                'mahasiswa_id' => Auth::id()
            ];
            Presensi::create($presensiInformation);
        }
    } 
}
