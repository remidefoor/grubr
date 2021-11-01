<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id()->index();
            $table->foreignId('club_id')->constrained();
            $table->index('club_id');
            $table->primary(['id', 'club_id']);
            $table->date('date');
            $table->unsignedBigInteger('opponent_club_id');
            $table->foreignId('opponent_user_id')->references('id')->on('clubs');
            $table->integer('team_goals');
            $table->integer('opponent_goals');
            $table->integer('personal_goals');
            $table->integer('seven_meter_throws');
            $table->integer('played_minutes');
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
        Schema::dropIfExists('statistics');
    }
}
