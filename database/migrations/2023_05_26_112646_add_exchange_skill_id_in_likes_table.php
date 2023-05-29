<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExchangeSkillIdInLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->unsignedBigInteger('exchange_skill_id')->after('id');
            $table->unsignedBigInteger('exchange_id')->after('exchange_skill_id');
            $table->dropColumn('like_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->dropColumn('exchange_skill_id');
            $table->dropColumn('exchange_id');
            $table->integer('like_to');
        });
    }
}
