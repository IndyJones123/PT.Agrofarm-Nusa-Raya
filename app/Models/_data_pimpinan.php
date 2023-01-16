<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _data_pimpinan extends Model
{
    use HasFactory;
    public $table = "_data_pimpinan";
    use HasFactory;
    public $fillable = ['namaperusahaan', 'clients', 'office', 'shortdeskripsi', 'deskripsi', 'products', 'workers', 'visi', 'misi'];
}
