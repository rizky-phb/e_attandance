<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_absen', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('nip')->unique();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('foto');
            $table->date('tanggal');
            $table->time('waktu'); 
            $table->string('status');  
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
        Schema::dropIfExists('data_absen');
    }
}
