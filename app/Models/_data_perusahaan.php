<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _data_perusahaan extends Model
{
    public $table = "_data_perusahaan";
    use HasFactory;
    public $fillable = ['namaperusahaan', 'clients', 'office', 'shortdeskripsi', 'deskripsi', 'products', 'workers', 'visi', 'misi'];
}
