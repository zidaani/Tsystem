<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('education');
            $table->string('home_town');
            $table->string('residential_address');
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
        Schema::dropIfExists('agents');
    }
}
