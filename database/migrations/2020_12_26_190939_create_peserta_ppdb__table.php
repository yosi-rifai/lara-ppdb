<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaPpdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peserta_ppdb', function (Blueprint $table) {
            $table->id();

            //jenis_kelamin relasi
            $table->unsignedBigInteger('id_jenis_kelamin');
            $table->foreign('id_jenis_kelamin')
            ->references('id')
            ->on('tbl_jenis_kelamin')
            ->onDelete('cascade');

            //agama relasi
            $table->unsignedBigInteger('id_agama');
            $table->foreign('id_agama')
            ->references('id')
            ->on('tbl_agama')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_pekerjaan_ayah')->nullable();
            $table->foreign('id_pekerjaan_ayah')
                ->references('id')
                ->on('tbl_pekerjaan_ortu')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_pekerjaan_ibu')->nullable();
            $table->foreign('id_pekerjaan_ibu')
                ->references('id')
                ->on('tbl_pekerjaan_ortu')
                ->onDelete('cascade');

            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->longText('alamat');
            $table->string('nisn');
            $table->string('no_telp');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('penghasilan_ayah');
            $table->string('penghasilan_ibu');
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
        Schema::dropIfExists('tbl_peserta_ppdb');
    }
}
