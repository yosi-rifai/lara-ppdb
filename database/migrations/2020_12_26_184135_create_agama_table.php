<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_agama', function (Blueprint $table) {
            $table->id();
            $table->string('nama_agama');
            $table->timestamps();
        });

        Schema::create('tbl_jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan');
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
        Schema::dropIfExists('tbl_agama');
        Schema::dropIfExists('tbl_jurusan');
    }
}
