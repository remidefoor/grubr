<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->index();
            $table->uuid('user_uuid')->index();
            $table->foreign('user_uuid')->references('uuid')->on('users');
            $table->primary(['id', 'user_uuid']);
            $table->date('date');
            $table->unsignedBigInteger('opponent_club_id');
            $table->foreign('opponent_club_id')->references('id')->on('clubs');
            $table->integer('team_goals');
            $table->integer('opponent_goals');
            $table->integer('personal_goals');
            $table->integer('seven_meter_throws');
            $table->integer('played_minutes');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE statistics CHANGE id id BIGINT(20) AUTO_INCREMENT NOT NULL UNIQUE');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
