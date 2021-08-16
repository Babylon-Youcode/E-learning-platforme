<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->string('name');
            $table->string('date');
            $table->string('price');
            $table->string('detail');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('users_id');
            $table->index('users_id','if_courses_users_idx');
            $table->foreign('users_id','if_courses_users_idx')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');

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
