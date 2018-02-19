<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('std_id')->unique()->nullable();
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->string('facebook')->nullable();
            $table->string('phone');
            $table->string('reason')->nullable();
            $table->string('remarks')->nullable();
            $table->string('comment')->nullable();
            $table->string('history')->nullable();
            $table->enum('level',['Excellent','Good', 'Fair'])->nullable();
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->timestamps();
            
        });
        Schema::table('volunteers',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
