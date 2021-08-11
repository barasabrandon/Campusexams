<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastpapers', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_code');
            $table->string('semester');
            $table->string('year')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('pastpapers');
    }
}
