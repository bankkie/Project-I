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
            $table->integer('member_id')->unsigned();
            $table->string('country');
            $table->date('exp_wp')->nullable();
            $table->string('ss_card')->unique()->nullable();
            $table->string('tax_no')->nullable();
            $table->date('birthday')->nullable();
            $table->date('begin_date')->nullable();
            $table->string('ext')->nullable();
            $table->enum('faculty',['FHT','FIS','FTE','CoE','Essand','CIP','IAC']);
            $table->string('status')->nullable();
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('staff',function(Blueprint $table){
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
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
