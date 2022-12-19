<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index(){
        $dosen = Dosen::where('user_id', Auth::id())->first();
        $timeline = Timeline::all();
        if($dosen){
            return view('dosen.timeline.index', compact('dosen', 'timeline'));
        }
        $admin = Administrator::where('user_id', Auth::id())->first();
        if($admin){
            return view('admin.timeline.index', compact('admin', 'timeline'));
        }
    }
}
