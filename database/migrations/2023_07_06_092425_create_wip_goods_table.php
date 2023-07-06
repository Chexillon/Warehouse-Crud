<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wip_goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_master_categorie');
            $table->integer('jumlah');
            $table->date('tanggal_produksi');
            $table->timestamps();

            $table->foreign('id_master_categorie')->references('id')->on('fg_wip_masters')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wip_goods');
    }
};
