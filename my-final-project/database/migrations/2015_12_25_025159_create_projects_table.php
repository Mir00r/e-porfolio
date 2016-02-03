<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table){

        $table->increments('id',11);
        $table->string('title',60);
        $table->string('supervisor',60);
        $table->string('url',60);
        $table->string('pmember',255);
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
