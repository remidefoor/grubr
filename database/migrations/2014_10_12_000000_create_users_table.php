<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('last_name');
            $table->string('first_name');
            $table->enum('gender', ['M', 'V']);
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('dominant_hand', ['left', 'right']);
            $table->enum('position', ['centre backcourt', 'goalkeeper', 'left backcourt', 'left wingman', 'pivot', 'right backcourt', 'right wingman']);
            $table->decimal('height', $precicison = 3, $scale = 2);
            $table->decimal('weight', $precision = 4, $scale = 1);
            $table->foreignId('club_id')->constrained();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
