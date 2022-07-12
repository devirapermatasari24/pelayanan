<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->id();
            $table->biginteger('NIK_NIM');
            $table->string('Nama');
            $table->string('Jenis_kelamin');
            $table->string('Jabatan');
            $table->string('Jurusan');
            $table->string('Pertanyaan')->nullable();
            $table->string('Di_kerjakan_oleh');
            $table->date('Tgl_Dikerjakan');
            $table->string('Solusi')->nullable();
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
        Schema::dropIfExists('hardware');
    }
}
