<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _data_products extends Model
{
    use HasFactory;
    public $table = "data_products";
    use HasFactory;
    public $fillable = ['namaperusahaan', 'namaproducts', 'deskripsi', 'tanggalterbit'];
}
