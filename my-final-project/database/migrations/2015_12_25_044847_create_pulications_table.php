<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePulicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table){

        $table->increments('id',11);
        $table->string('title',60);
        $table->string('publisher',60);
        $table->string('url',60);
        $table->string('auther',255);
        $table->date('date');
        $table->string('description',1000);
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
        //
    }
}
