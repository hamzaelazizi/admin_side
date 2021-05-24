<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoeffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coeffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('conference');
            $table->integer('ouvrage');
            $table->integer('chapter');
            $table->integer('article_index');
            $table->integer('article');
            $table->integer('doctorat');//
            $table->intger('brevet');//
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
        Schema::dropIfExists('coeffs');
    }
}
