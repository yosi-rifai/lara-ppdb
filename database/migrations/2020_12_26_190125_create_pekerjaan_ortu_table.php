<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pekerjaan_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerjaan');
            $table->timestamps();
        });

        // Schema::create('tbl_penghasilan_ortu', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('penghasilan_ortu');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pekerjaan_ortu');
        // Schema::dropIfExists('tbl_penghasilan_ortu');
    }
}
