<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('total');
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->unsignedBigInteger('package_id');
            $table->text('notes');
            $table->timestamps();

             $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

             $table->foreign('package_id')
                    ->references('id')->on('packages')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
