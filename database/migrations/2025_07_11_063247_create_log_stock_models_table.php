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
        Schema::create('log_stock_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('fk_stok_komoditas_id')
                ->references('id')
                ->on('stok_komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->integer('old_stock');
            $table->integer('new_stock');
            $table->foreignUuid('created_by')
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_stock_models');
    }
};
