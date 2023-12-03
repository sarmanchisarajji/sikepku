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
        Schema::create('tbl_kategori_kriteria', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tbl_kategori_id');
            $table->unsignedBigInteger('tbl_kriteria_id');

            $table->foreign('tbl_kategori_id')->references('id')->on('tbl_kategori')->onDelete('cascade');
            $table->foreign('tbl_kriteria_id')->references('id')->on('tbl_kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kategori_kriteria');
    }
};
