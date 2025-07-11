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
        Schema::create('harga_komoditas_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('fk_sub_komoditas_id')
                ->references('id')
                ->on('sub_komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->date('tanggal');
            $table->integer('harga_lama')->nullable();
            $table->integer('harga_baru')->nullable();
            $table->timestamps();

            $table->index('fk_sub_komoditas_id');
            $table->index('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_komoditas_models');
    }
};
