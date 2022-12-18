<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookController extends Controller
{
    function index(){
        $user = Mahasiswa::where('user_id', Auth::id())->first();
        if($user){
            return view('mhs.logbook');
        }
        $user = Dosen::where('user_id', Auth::id())->first();
        if($user){
            return view('dosen.logbook');
        }
        $user = Administrator::where('user_id', Auth::id())->first();
        if($user){
            return view('admin.logbook');
        }
    }
    function create(Request $request){
        $request->validate([
            'modul_id' => 'required',
            'mahasiswa_id' => 'required'
        ]);

        $logbookData = [
            'nilai' => 0,
            'modul_id' => $request->modul_id,
            'mahasiswa_id' => $request->mahasiswa_id
        ];
        Logbook::create($logbookData);
    }
    function updateNilai(Request $request){
        $logbookData = Logbook::find($request->logbook_id);
        $logbookData->nilai = $request->nilai;
        $logbookData->save();
    }
}
