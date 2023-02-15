<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->date('tgl_pengaduan');
            $table->integer('nik');
            $table->text('isi_laporan');
            $table->string('foto', 225);
            $table->enum('status', ['0', 'proses', 'selesai']);
            $table->foreign('nik')->references('nik')->on('masyarakat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};
