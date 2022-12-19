<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";

    // set timestamps ke false
    public $timestamps = false;

    protected $fillable = ['nama', 'angkatan', 'ipk', 'user_id'];
    
    public function user()
    {
         return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function modul(){
        return $this->belongsToMany(Modul::class);
    }

    public function timeline(){
        return $this->belongsToMany(Timeline::class);
    }

    public function tugas(){
        return $this->belongsToMany(Modul::class);
    }

    public function ips(){
        return $this->belongsToMany(IPS::class);
    }

    public function logbook(){
        return $this->belongsToMany(Logbook::class);
    }
}
