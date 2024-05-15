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
        Schema::create('preset_preferences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->double('harga');
            $table->double('perizinan_regulasi');
            $table->double('ketersediaan_air');
            $table->double('lokasi');
            $table->double('potensi_produksi');
            $table->double('aksesibilitas');
            $table->double('kondisi_lingkungan');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preset_preferences');
    }
};
