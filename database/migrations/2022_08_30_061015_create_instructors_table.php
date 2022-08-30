<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable()->default('Instructor of CIAS');
            $table->string('avatar')->nullable()->default('/assets/images/author/author-01.jpg');
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->unsignedTinyInteger('gender')->nullable()->comment('1=Male, 2=Female');
            $table->date('birthday')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
    }
}
