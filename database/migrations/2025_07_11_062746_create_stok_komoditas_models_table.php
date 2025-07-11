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
        Schema::create('stok_komoditas_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('fk_komoditas_id')
                ->references('id')
                ->on('komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->integer('stock')->default(0);
            $table->date('tanggal');
            $table->enum('status_verifikasi', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignUlid('created_by')
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->index('fk_komoditas_id');
            $table->index('tanggal');
            $table->index('status_verifikasi');
            $table->index(['tanggal', 'status_verifikasi']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_komoditas_models');
    }
};
