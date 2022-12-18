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

}
