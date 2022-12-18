<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table = "modul";

    // set timestamps ke false
    public $timestamps = false;

    public function dosen(){
        return $this->belongsToMany(Dosen::class);
    }

    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class);
    }
}
