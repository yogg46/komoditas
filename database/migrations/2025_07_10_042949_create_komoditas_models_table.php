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
        Schema::create('komoditas_afs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('komoditas');
            $table->foreignUuid('fk_pasar_id')->nullable()
                ->references('id')
                ->on('pasar_afs')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->integer('urutan')->default(0);
            $table->string('publish')->default('N');
            $table->timestamps();
            $table->index('komoditas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komoditas_afs');
    }
};
