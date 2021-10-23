<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDimensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dimensions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('body_part_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('body_part_id')->references('id')->on('body_parts');
            $table->float('inches');
            $table->float('centimeters');
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
        Schema::table('user_dimensions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['body_part_id']);
        });
        Schema::dropIfExists('user_dimensions');
    }
}
