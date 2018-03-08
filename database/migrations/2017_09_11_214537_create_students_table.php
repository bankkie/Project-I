<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->enum('title', ['Mr.', 'Miss', 'Ms.']);
            $table->string('first_name')->unique();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('country');
            $table->string('phone');
            $table->date('exp_visa')->nullable();
            $table->date('exp_passport')->nullable();
            $table->string('remarks');
            $table->string('photo_add');
            $table->string('std_id')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->date('study_date')->nullable();
            $table->string('section')->nullable();
            $table->enum('category',['Exchange students','Postgraduate students','Undergraduate students']);
            $table->enum('faculty',['FHT','FIS','FTE','COC','ESSAND','CoE']);
            $table->enum('activity_hour', ['complete', 'incomplete']);
            $table->enum('buddy',['Yes', 'No']);
            $table->string('facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('hobby')->nullable();
            $table->string('interests')->nullable();
            $table->string('status')->nullable();
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->timestamps();
            
        });
        Schema::table('students',function(Blueprint $table){
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
        Schema::dropIfExists('students');
    }
}
