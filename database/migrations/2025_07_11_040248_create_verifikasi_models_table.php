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
        Schema::create('verifikasi_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('tanggal');
            $table->foreignUuid('fk_harga_komoditas_id')
                ->references('id')
                ->on('harga_komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT')
                ->nullable();
            $table->foreignUuid('fk_sub_komoditas_id')
                ->references('id')
                ->on('sub_komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->enum('status_verifikasi', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignUlid('created_by')
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->timestamps();

            $table->unique(['tanggal', 'fk_sub_komoditas_id']);
            $table->index(['tanggal', 'status_verifikasi']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_models');
    }
};
