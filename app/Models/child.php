<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
    protected $fillable = ['id_master_categorie', 'nama_barang', 'nama_supplier', 'jumlah' , 'tanggal'];
    protected $table = 'child';
}

