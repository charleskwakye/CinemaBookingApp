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
        Schema::create('bookedseats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('seat_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('bookedseats')->insert(
            [
                [
                    'booking_id' => 1,
                    'seat_id' => 1
                ],
                [
                    'booking_id' => 2,
                    'seat_id' => 101
                ],
                [
                    'booking_id' => 3,
                    'seat_id' => 102
                ],
                [
                    'booking_id' => 4,
                    'seat_id' => 221
                ],
                [
                    'booking_id' => 5,
                    'seat_id' => 2
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookedseats');
    }
};
