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
        Schema::create('log_harga_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('fk_harga_komoditas_id')
                ->references('id')
                ->on('harga_komoditas_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
             $table->integer('old_price');
            $table->integer('new_price');
            $table->foreignUuid('created_by')
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_harga_models');
    }
};
