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

    public static function dosen(){
        return (new static)->belongsToMany(Dosen::class);
    }

    public static function mahasiswa(){
        return (new static)->belongsToMany(Mahasiswa::class);
    }
}
