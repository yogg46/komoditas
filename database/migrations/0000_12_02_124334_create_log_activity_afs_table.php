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
        Schema::create('log_activity_afs', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
            $table->string('subject');
            $table->string('url');
            $table->string('method');
            $table->string('aksi');
            $table->string('agent')->nullable();
            $table->string('user')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_activity_afs');
    }
};
