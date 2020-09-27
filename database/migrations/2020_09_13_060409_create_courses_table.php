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
            $table->unsignedBigInteger('user_id');  // For teacher
            $table->string('title');
            $table->string('slug');
            $table->text('image')->nullable();
            $table->string('short_text')->nullable();
            $table->longText('long_text')->nullable();
            $table->string('joining_code');
            $table->string('batch_no');
            $table->tinyInteger('status')->default(1);
            $table->date('started_at');
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
        Schema::dropIfExists('courses');
    }
}
