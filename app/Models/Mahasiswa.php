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
}
