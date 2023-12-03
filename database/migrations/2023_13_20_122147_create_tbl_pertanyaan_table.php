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
        Schema::create('tbl_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');

            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('kriteria_id');

            $table->foreign('kategori_id')->references('id')->on('tbl_kategori')->onDelete('cascade');
            $table->foreign('kriteria_id')->references('id')->on('tbl_kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pertanyaan');
    }
};
