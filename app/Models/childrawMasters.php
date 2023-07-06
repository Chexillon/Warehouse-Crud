<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class childrawMasters extends Model
{
    use HasFactory;
    protected $table = 'childraw_masters';
    public $fillable =['id_categorie', 'nama_barang', 'nama_supplier', 'kode_barang', 'jenis_barang'];
}
