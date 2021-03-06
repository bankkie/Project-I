<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->enum('title', ['Mr.', 'Miss', 'Ms.']);
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('country');
            $table->string('phone')->nullable();
            $table->date('exp_visa')->nullable();
            $table->date('exp_passport')->nullable();
            $table->string('remarks')->nullable();
            $table->string('photo_add')->nullable();
            $table->date('exp_wp')->nullable();
            $table->string('ss_card')->nullable();
            $table->string('tax_no')->nullable();
            $table->date('birthday')->nullable();
            $table->date('begin_date')->nullable();
            $table->string('ext')->nullable();
            $table->enum('status',['working','resign']);
            $table->enum('faculty',['FHT','FIS','FTE','CoE','ESSAND','CIP','IAC','COC']);
            $table->enum('buddy',['Yes', 'No']);
            $table->string('facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('hobby')->nullable();
            $table->string('interests')->nullable();
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->timestamps();
            
        });
        Schema::table('staff',function(Blueprint $table){
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
        Schema::dropIfExists('staff');
    }
}
