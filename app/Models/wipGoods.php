<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wipGoods extends Model
{
    use HasFactory;
    protected $fillable = ['id_master_categorie', 'jumlah', 'tanggal_produksi'];
    protected $table = 'wip_goods';
}
