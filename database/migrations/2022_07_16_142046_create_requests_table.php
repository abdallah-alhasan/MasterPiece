<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('trade_id');
            $table->unsignedBigInteger('trade_with_id');
            $table->boolean('status')->default(0);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trade_id')->references('id')->on('trades');
            $table->foreign('trade_with_id')->references('id')->on('trades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
