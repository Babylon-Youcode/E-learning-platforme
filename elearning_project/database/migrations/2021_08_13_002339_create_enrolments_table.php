<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolments', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role', 100)->default('USR')->comment('USR = user, ADM = admin, TAC = teacher');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('courses_id');
            $table->index('users_id','if_enrolments_users_idx');
            $table->index('courses_id','if_enrolments_courses_idx');

            $table->foreign('users_id','if_enrolments_users_idx')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('users_id','if_enrolments_courses_idx')->references('id')->on('courses')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolments');
    }
}
