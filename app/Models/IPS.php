<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPS extends Model
{
    use HasFactory;

    protected $table = "_i_p_s";

    // set timestamps ke false
    public $timestamps = false;

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }

}
