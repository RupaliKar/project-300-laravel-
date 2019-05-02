<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name',100);
            $table->string('pdf',100)->nullable();
            $table->string('slide',100)->nullable();
            $table->string('software',100)->nullable();
		
			$table->unsignedBigInteger('course_name')->index()->nullable();
            $table->foreign('course_name')->references('id')->on('courses')->onDelete('cascade')->onUpdate('No Action');
			
            $table->unsignedBigInteger('userID')->index()->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('deptID')->index();
            $table->foreign('deptID')->references('id')->on('departments')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('semesterID')->index();
            $table->foreign('semesterID')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('course_details');
    }
}
