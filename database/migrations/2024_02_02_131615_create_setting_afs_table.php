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
        Schema::create('setting_afs', function (Blueprint $table) {
            // $table->id();
            $table->integer('id')->primary();
            $table->string('title_nav');
            $table->string('unit')->nullable();
            $table->string('sub_unit')->nullable();
            $table->string('name_apps');
            $table->string('akronim')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->text('jam_layanan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('logo_nav')->nullable();
            $table->text('logo_page_login')->nullable();
            $table->text('logo_branding')->nullable();
            $table->foreignuuid('fk_id_user')->nullable()->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_afs');
    }
};
