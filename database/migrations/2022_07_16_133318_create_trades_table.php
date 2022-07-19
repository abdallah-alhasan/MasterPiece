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
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('platform_id');
            $table->string('title');
            $table->longText('image');
            $table->double('price')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('condition')->default(0);
            $table->string('tags')->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('platform_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
};
