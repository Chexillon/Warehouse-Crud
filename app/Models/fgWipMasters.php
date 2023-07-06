<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fgWipMasters extends Model
{
    use HasFactory;

    protected $table = 'fg_wip_masters';
    public $fillable =['id_categorie', 'nama_barang', 'nama_customer', 'kode_barang'];
}
