<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassGroupClassroomPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_group_classroom_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_group_id');
            $table->foreign('class_group_id')->references('id')->on('class_groups')->onDelete('cascade');
            $table->unsignedInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
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
        Schema::dropIfExists('class_group_classroom_pivot');
    }
}
