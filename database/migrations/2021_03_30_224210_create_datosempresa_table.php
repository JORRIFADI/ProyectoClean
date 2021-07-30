<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosempresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosempresa', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 1000);
            $table->string('mision', 255);
            $table->string('vision', 255);
            $table->string('urllogo', 255);
            $table->string('slogan', 255);
            $table->string('url_curriculum', 255);
            $table->string('icon_mision', 50);
            $table->string('icon_vision', 50);
            $table->string('url_img1', 50);
            $table->string('url_img1', 50);
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
        Schema::dropIfExists('datosempresa');
    }
}
