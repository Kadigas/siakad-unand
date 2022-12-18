<?php

namespace App\Http\Middleware;

use App\Models\Administrator;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $user = Mahasiswa::where('user_id', Auth::id())->first();
            if($user){
                return redirect('/mhs');
            }
            $user = Dosen::where('user_id', Auth::id())->first();
            if($user){
                return redirect('/dosen');
            }
            $user = Administrator::where('user_id', Auth::id())->first();
            if($user){
                return redirect('/admin');
            }
        }
        return $next($request);
    }
}
