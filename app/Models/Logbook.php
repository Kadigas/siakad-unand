<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $table = "logbook";

    // set timestamps ke false
    public $timestamps = false;

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }

    public function modul(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
