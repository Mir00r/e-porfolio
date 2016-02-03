<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volun', function (Blueprint $table){

        $table->increments('id',11);
        $table->string('name',60);
        $table->string('role',60);
        $table->string('reason',60);
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
