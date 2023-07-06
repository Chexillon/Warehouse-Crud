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
        Schema::create('childraw_masters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categorie');
            $table->string('nama_barang');
            $table->string('nama_supplier');
            $table->string('kode_barang');
            $table->string('jenis_barang');
            $table->timestamps();

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childraw_masters');
    }
};
