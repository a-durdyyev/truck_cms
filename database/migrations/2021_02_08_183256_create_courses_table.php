<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->bigIncrements('id');


            $table->string('cursa');
            $table->integer('clientID');

            $table->dateTime('plecareData');
            $table->string('plecareLocatie');
            $table->integer('europaletiIncarcat');

            $table->dateTime('sosireData');
            $table->string('sosireLocatie');
            $table->integer('europaletiDescarcat');

            $table->float('pret');
            $table->float('kilometriParcurs');
            $table->text('notes');

            $table->integer('europaletiDiferenta');



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
        Schema::dropIfExists('courses');
    }
}
