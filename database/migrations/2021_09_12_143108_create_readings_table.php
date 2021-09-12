<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->decimal('ph', 8, 2)->nullable();
            $table->decimal('high_range_ph', 8, 2)->nullable();
            $table->decimal('ammonia', 8, 2)->nullable();
            $table->decimal('nitrite', 8, 2)->nullable();
            $table->decimal('nitrate', 8, 2)->nullable();
            $table->boolean('water_changed')->default(0);;
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
        Schema::dropIfExists('readings');
    }
}
