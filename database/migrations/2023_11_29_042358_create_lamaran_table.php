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
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jk',['laki-laki','perempuan']);
            $table->date('tgl_lahir');
            $table->enum('jurusan',['RPL','TKJ','MM','TEKLIN','DPIB','TBSM','TKRO']);
            $table->string('thn_ajaran');
            $table->text('alamat');
            $table->text('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran');
    }
};
