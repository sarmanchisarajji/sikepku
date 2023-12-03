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
        Schema::create('tbl_jawaban_user', function (Blueprint $table) {
            $table->id();
            $table->string('jawaban', 45);

            $table->unsignedBigInteger('tbl_pertanyaan_id');
            $table->unsignedBigInteger('users_id');
            
            $table->foreign('tbl_pertanyaan_id')->references('id')->on('tbl_pertanyaan')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_jawaban_user');
    }
};
