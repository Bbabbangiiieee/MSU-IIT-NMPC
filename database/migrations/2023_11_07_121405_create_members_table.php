<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('lname')->nullable();
            $table->string('mname')->nullable();
            $table->string('fname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->text('religion')->nullable();
            $table->string('email')->nullable();
            $table->longText('place_birth')->nullable();
            $table->longText('present_address')->nullable();
            $table->string('usercode')->nullable();
            $table->string('occupation')->nullable();
            $table->string('ofw_family_member')->nullable();
            $table->integer('tin')->nullable();
            $table->longText('educational_attainment')->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->string('img')->nullable();
            $table->string('e_signature')->nullable();
            $table->string('app_date')->nullable();
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
        Schema::dropIfExists('members');
    }
};
