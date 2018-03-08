<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name')->unique();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->enum('title', ['Mr.', 'Miss', 'Ms.']);
            $table->enum('faculty',['FHT','FIS','FTE','CcE','ESSAND','CIP','IAC','COC']);
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
