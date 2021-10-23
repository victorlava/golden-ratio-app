<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('payment_id')
                ->references('id')
                ->on('payments');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->text('request')->nullable();
            $table->text('response')->nullable();
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
        Schema::table('payments_log', function (Blueprint $table) {
            $table->dropForeign(['payment_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('payments_log');
    }
}
