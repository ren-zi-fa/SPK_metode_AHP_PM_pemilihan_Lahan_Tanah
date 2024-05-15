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
        Schema::create('favorites', function (Blueprint $table) {
            $tableNames['users'] = 'users';
            $tableNames['products'] = 'products';

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('fav_product_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->foreign('fav_product_id')
                ->references('id')
                ->on($tableNames['products'])
                ->onDelete('cascade');

            $table->primary(['user_id', 'fav_product_id'], 'favorites_user_id_fav_product_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
