<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _data_pertanyaan extends Model
{
    public $table = "_data_pertanyaan";
    use HasFactory;
    public $fillable = ['namaperusahaan', 'pertanyaan', 'jawaban'];
}
