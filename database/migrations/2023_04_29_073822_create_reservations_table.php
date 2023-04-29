<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

{

  Schema::create('reservations', function (Blueprint $table) {

    $table->id();

    $table->integer('teacher_id');

    $table->integer('learner_id');

    $table->date('date');

    $table->time('time');

    $table->boolean('reserved')->default(false);

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
        Schema::dropIfExists('reservations');
    }
}
