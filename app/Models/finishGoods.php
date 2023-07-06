<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finishGoods extends Model
{
    use HasFactory;
    protected $fillable = ['id_master_categorie', 'jumlah', 'tanggal_produksi'];
    protected $table = 'finish_goods';
}
