<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->integer('pet_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('day')->nullable();
            $table->integer('service_price')->nullable();
            $table->string('status')->default('pending');
            $table->time('open_at');
            $table->time('close_at');
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
        Schema::dropIfExists('practices');
    }
}
