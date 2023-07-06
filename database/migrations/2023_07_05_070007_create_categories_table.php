<?php

use App\Models\Categories;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('index')->unique();
            $table->string('name');
        });

        Categories::create([
            'id' => 1,
            'index' => 'FG',
            'name' => 'Barang Jadi / Barang Setengah Jadi' 
        ]);

        Categories::create([
            'id' => 2,
            'index' => 'RAW/CHILD',
            'name' => 'Raw Material / Child Part' 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
