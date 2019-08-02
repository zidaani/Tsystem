<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('uid');
            $table->string('branch_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('education');
            $table->string('home_town');
            $table->string('residential_address');
            $table->string('email')->unique();
            $table->integer('type_id')->unsigned()->index()->default(1);
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password');
            $table->rememberToken();
             $table->softDeletes();
            $table->timestamp('created_at')->default(date('y-m-d H:i:s', strtotime('now')));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
