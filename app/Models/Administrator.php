<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = "administrator";

    // set timestamps ke false
    public $timestamps = false;

    protected $fillable = ['nama', 'user_id'];

    public function user()
     {
         return $this->belongsTo('App\Models\User', 'user_id');
     }
}
