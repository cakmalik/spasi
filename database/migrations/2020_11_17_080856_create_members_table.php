<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nia');
            $table->integer('nik');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('hp');
            $table->string('ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jml_saudara')->nullable();
            $table->string('cabang');
            $table->integer('angkatan');
            $table->string('kader_dari')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
