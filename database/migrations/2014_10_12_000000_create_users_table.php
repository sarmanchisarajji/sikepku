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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 200);
            $table->string('nim', 100)->unique();
            $table->string('email', 200)->unique();

            $table->foreign('tbl_jurusan_id')->references('id')->on('tbl_jurusan')->onDelete('cascade');
            $table->unsignedBigInteger('tbl_jurusan_id');

            $table->enum('jenis_kelamin', ['Laki - Laki', 'Perempuan']);
            $table->text('alamat');
            $table->string('no_hp', 100);
            $table->enum('user_type', ['admin', 'pengguna_lulusan', 'alumni', 'tenaga_kependidikan', 'mahasiswa', 'dosen', 'mitra']);
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
