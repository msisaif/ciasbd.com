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
            $table->foreignId('category_id')->constrained();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable()->default('/assets/images/courses/courses-details.jpg');
            $table->string('intro_video')->nullable();
            $table->unsignedFloat('price')->default(0);
            $table->unsignedFloat('discount')->default(0);
            $table->unsignedTinyInteger('language')->default(1)->comment('1=Bangla, 2=English');
            $table->unsignedTinyInteger('level')->nullable()->comment('1=Beginner, 2=Intermediate, 3=Advanced');
            $table->boolean('has_certificate')->default(0);
            $table->boolean('is_published')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('courses');
    }
}
