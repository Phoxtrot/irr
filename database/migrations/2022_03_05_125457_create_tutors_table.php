<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('language');
            $table->string('number');
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('country');
            $table->string('hizb');
            $table->string('academic_qualification');
            $table->string('interview_date');
            $table->string('social_media');
            $table->string('npk_name');
            $table->string('nok_email');
            $table->string('nok_relationship');
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
        Schema::dropIfExists('tutors');
    }
}
