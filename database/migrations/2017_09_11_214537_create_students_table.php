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
            $table->integer('member_id')->unsigned();
            $table->string('std_id')->unique()->nullable();
            $table->string('country');
            $table->date('birthday')->nullable();
            $table->date('study_date')->nullable();
            $table->string('section')->nullable();
            $table->enum('category',['Exchange students','Postgraduate students','Undergraduate students']);
            $table->enum('faculty',['FHT','FIS','FTE','CoE','Essand']);
            $table->enum('activity_hour', ['complete', 'incomplete']);
            $table->string('else')->nullable();
            $table->string('else2')->nullable();
            $table->string('else3')->nullable();
            $table->string('else4')->nullable();
            $table->string('else5')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('students',function(Blueprint $table){
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
        Schema::dropIfExists('students');
    }
}
