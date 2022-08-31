<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrd', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('nip')->unique();
            $table->string('nama');
            $table->string('email');
            $table->char('gender',1);
            $table->date('ttl');
            $table->text('alamat');            
            $table->bigInteger('no_hp');
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
        Schema::dropIfExists('hrd');
    }
}
