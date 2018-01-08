<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('person_id')->unique();
            $table->unsignedBigInteger('parent1_id');
            $table->unsignedBigInteger('parent2_id');
            $table->unsignedBigInteger('guardian1_id');
            $table->unsignedBigInteger('guardian2_id');
            $table->unsignedBigInteger('guardian3_id')->default(0);
            $table->timestamps();
            $table->index('parent1_id', 'idx_parent1');
            $table->index('parent2_id', 'idx_parent2');
            $table->index('guardian1_id', 'idx_guardian1');
            $table->index('guardian2_id', 'idx_guardian2');
            $table->index('guardian3_id', 'idx_guardian3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
