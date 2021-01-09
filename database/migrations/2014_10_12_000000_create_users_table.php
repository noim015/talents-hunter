<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile_pic')->nullable();
            $table->string('age')->nullable();
            $table->string('password');
            $table->string('current_city')->nullable();
            $table->string('current_address')->nullable();
            $table->string('current_postcode')->nullable();            
            $table->string('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_postcode')->nullable();
            $table->string('ssc_gpa')->nullable();
            $table->string('school_name')->nullable();
            $table->string('ssc_p_year')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('hsc_gpa')->nullable();
            $table->string('college_name')->nullable();
            $table->string('hsc_p_year')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('bsc_gpa')->nullable();            
            $table->string('bsc_passing_year')->nullable();
            $table->string('university_name')->nullable();
            $table->string('bsc_subject')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('skill')->nullable();
            $table->text('about')->nullable();
            $table->string('banner')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('blood_group')->nullable();            
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_mob')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_mob')->nullable();
            $table->string('mobile')->nullable();
            $table->string('additional_mob')->nullable();
            $table->string('interest')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('availability')->nullable();



            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
