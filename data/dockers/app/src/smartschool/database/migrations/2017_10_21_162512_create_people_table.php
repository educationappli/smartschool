<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
	Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('first_name', 32);
            $table->string('middle_name', 32)->nullable();
            $table->string('last_name', 32);
            $table->date('birth_date');
            $table->tinyInteger('gender');
            $table->string('contact_phone', 128)->nullable();
            $table->string('contact_mobile', 128)->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->text('address');
            $table->text('note')->nullable();
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
        //
	Schema::dropIfExists('people');
    }
}
