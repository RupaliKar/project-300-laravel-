<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name', 200);
			$table->string('gender',8)->nullable();
			$table->string('email',100)->nullable()->unique();
			$table->string('phone_no',11)->nullable();
			$table->string('image',100)->nullable();
			$table->text('designation')->nullable();
			$table->unsignedBigInteger('departmentID')->index();
            $table->foreign('departmentID')->references('id')->on('departments')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('faculties');
    }
}
