<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finished extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'kode_barang', 'nama_customer','tanggal', 'jumlah'];
    protected $table = 'finished';
}

