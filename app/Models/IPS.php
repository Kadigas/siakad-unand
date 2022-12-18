<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPS extends Model
{
    use HasFactory;

    protected $table = "ips";

    // set timestamps ke false
    public $timestamps = false;
}
