<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_response', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_kelamin',["1","2"]);
            $table->string('nama');
            $table->string('nama_jalan');
            $table->string('email');
            $table->integer('angka_kurang');
            $table->integer('angka_lebih');
            $table->string('profesi');
            $table->json('plain_json');
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
        Schema::dropIfExists('hasil_response');
    }
}
