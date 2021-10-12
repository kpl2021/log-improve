<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id')->nullable();
            $table->string('name');
            $table->char('nik')->unique();
            $table->timestamp('nik_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('position')->nullable();
            $table->string('unit')->nullable();
            $table->string('golongan')->nullable();
            $table->string('no_telp')->nullable();
            $table->longText('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('roles', function (Blueprint $kolom){
        //     $kolom->increments('id');
        //     $kolom->string('namaRole');
        // });

        Schema::table('karyawan', function (Blueprint $kolom){
            $kolom->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
