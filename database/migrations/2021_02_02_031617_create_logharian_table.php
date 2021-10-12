<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogharianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logharian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->date('date')->nullable();
            $table->string('jenis')->nullable();
            $table->char('jumlah')->nullable();
            $table->longText('uraian')->nullable();
            $table->longText('keterangan')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('logharian', function (Blueprint $kolom){
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
        Schema::dropIfExists('logharian');
    }
}
