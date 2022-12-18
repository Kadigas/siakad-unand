<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosen";

    // set timestamps ke false
    public $timestamps = false;

    protected $fillable = ['nama', 'user_id'];

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

    public static function mahasiswa_bimbingan(){
        return (new static)::with('modul.mahasiswa');
    }

    public static function mahasiswa_bimbingan_dosen($id_dosen){
        return (new static)::where('id', $id_dosen)->with('modul.mahasiswa');
    }
}
