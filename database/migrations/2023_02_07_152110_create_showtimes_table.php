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
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained()->restrictOnDelete();
            $table->foreignId('theater_id')->constrained()->restrictOnDelete();
            $table->time('start_time');
            $table->time('end_time');
            $table->float('price',5,2)->default(19.99);
            $table->date('showtime_date');
            $table->timestamps();
        });
        DB::table('showtimes')->insert(
            [
                [
                    'movie_id' => 1,
                    'theater_id' => 1,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 18.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 2,
                    'theater_id' => 2,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 20.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 3,
                    'theater_id' => 3,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 22.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 4,
                    'theater_id' => 4,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 18.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 5,
                    'theater_id' => 5,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 20.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 6,
                    'theater_id' => 6,
                    'start_time' => '10:00:00',
                    'end_time' => '12:00:00',
                    'price' => 22.00,
                    'showtime_date' => date("Y-m-d"),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 7,
                    'theater_id' => 1,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 18.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 8,
                    'theater_id' => 2,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 20.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 9,
                    'theater_id' => 3,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 22.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 10,
                    'theater_id' => 4,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 18.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 11,
                    'theater_id' => 5,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 20.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
                    'created_at' => now()
                ],
                [
                    'movie_id' => 12,
                    'theater_id' => 6,
                    'start_time' => '20:00:00',
                    'end_time' => '22:00:00',
                    'price' => 22.00,
                    'showtime_date' => date("Y-m-d", strtotime("+1 day")),
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
        Schema::dropIfExists('showtimes');
    }
};
