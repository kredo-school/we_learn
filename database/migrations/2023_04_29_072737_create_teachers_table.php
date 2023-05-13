<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->integer('age');
            $table->string('residence', 255);
            $table->enum('gender', ['male', 'female']);
            $table->string('subject', 255);
            $table->string('occupation', 255);
            $table->string('language', 255);
            $table->longtext('about')->nullable();
            $table->longtext('profile_img')->nullable();
            $table->string('learning_mode', 255)->nullable();
            $table->string('location',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
