<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNosotrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->string('descripcion1',1000);
            $table->string('descripcion2',1000);
            $table->string('imgslaider1',100);
            $table->string('imgslaider2',100);
            $table->string('imgslaider3',100);
            $table->string('urlbanner',200);
           
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
        Schema::dropIfExists('nosotros');
    }
}
