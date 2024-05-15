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
        Schema::create('hasil_rekomendasi', function (Blueprint $table) {
            $tableNames['users'] = 'users';
            $tableNames['products'] = 'products';

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->double('n_bobot');

            $table->foreign('user_id')
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')
                ->on($tableNames['products'])
                ->onDelete('cascade');

            $table->primary(['user_id', 'product_id'], 'hasil_rekomendasi_user_id_product_id_primary');
        });
        // nilai ahp dan pm yang digunakan
        Schema::create('nilai_ahp_pm_digunakan_hasil_rekomendasi', function (Blueprint $table) {
            $tableNames['users'] = 'users';

            $table->unsignedBigInteger('user_id');

            $table->double('bobot_harga');
            $table->double('bobot_perizinan_regulasi');
            $table->double('bobot_ketersediaan_air');
            $table->double('bobot_lokasi');
            $table->double('bobot_potensi_produksi');
            $table->double('bobot_aksesibilitas');
            $table->double('bobot_kondisi_lingkungan');


            $table->string('pref_harga');
            $table->string('pref_perizinan_regulasi');
            $table->string('pref_ketersediaan_air');
            $table->string('pref_lokasi');
            $table->string('pref_potensi_produksi');
            $table->string('pref_aksesibilitas');
            $table->string('pref_kondisi_lingkungan');

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->primary(['user_id'], 'nilai_ahp_pm_digunakan_hasil_rekomendasi_user_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ahp_pm_digunakan_hasil_rekomendasi');
        Schema::dropIfExists('hasil_rekomendasi');
    }
};
