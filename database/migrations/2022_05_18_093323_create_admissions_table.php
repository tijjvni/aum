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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('email');
            $table->string('guardian_email');
            $table->bigInteger('phone');
            $table->bigInteger('guardian_phone');
            $table->string('guardian_name');
            $table->string('address');
            $table->string('nationality');
            $table->string('state');
            $table->string('faculty');
            $table->string('department');
            $table->string('course');
            $table->string('type');
            $table->string('jamb_score');
            $table->string('jamb_regno')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('status')->default('processing')->nullable();
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
        Schema::dropIfExists('admissions');
    }
};