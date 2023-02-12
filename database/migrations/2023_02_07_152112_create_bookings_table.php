<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->foreignId('showtime_id')->constrained()->restrictOnDelete();
            $table->float('total_price')->default(19.99);
            $table->boolean('paid');
            $table->timestamps();
        });
        DB::table('bookings')->insert(
            [
                [
                    'user_id' => 2,
                    'showtime_id' => 1,
                    'total_price' => 18.00,
                    'paid' => 1,
                    'created_at' => now()
                ],
                [
                    'user_id' => 2,
                    'showtime_id' => 2,
                    'total_price' => DB::table('showtimes')->where('id', 2)->value('price'),
                    'paid' => 1,
                    'created_at' => now()
                ],
                [
                    'user_id' => 3,
                    'showtime_id' => 2,
                    'total_price' => DB::table('showtimes')->where('id', 2)->value('price'),
                    'paid' => 1,
                    'created_at' => now()
                ],
                [
                    'user_id' => 4,
                    'showtime_id' => 3,
                    'total_price' => DB::table('showtimes')->where('id', 3)->value('price'),
                    'paid' => 1,
                    'created_at' => now()
                ],
                [
                    'user_id' => 5,
                    'showtime_id' => 1,
                    'total_price' => DB::table('showtimes')->where('id', 1)->value('price'),
                    'paid' => 0,
                    'created_at' => now()
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
        Schema::dropIfExists('bookings');
    }
};
