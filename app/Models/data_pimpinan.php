<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pimpinan extends Model
{
    use HasFactory;
    public $table = "data_pimpinan";
    public $fillable = ['namaperusahaan', 'namapimpinan', 'gelar'];
}
