<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nombres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('structure_id')->unsigned()->index();
            $table->integer('conference');
            $table->integer('ouvrage');
            $table->integer('chapter');
            $table->integer('article_index');
            $table->integer('article');
            $table->integer('doctorat');//
            $table->integer('brevet');//
            $table->integer('manifestation_nat');
            $table->integer('manifestation_reg');
            $table->integer('membre_per');
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
        Schema::dropIfExists('nombres');
    }
}
