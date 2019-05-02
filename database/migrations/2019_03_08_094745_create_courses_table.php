<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('course_code',50)->nullable();
            $table->double('course_credit')->nullable();
            $table->unsignedBigInteger('deptID')->index();
            $table->foreign('deptID')->references('id')->on('departments')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('semesterID')->index();
            $table->foreign('semesterID')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->index()->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('courses');
    }
}
