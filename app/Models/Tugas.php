<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = "tugas";
    protected $fillable = ['nilai', 'jenis', 'dosen_id', 'modul_id', 'mahasiswa_id'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
