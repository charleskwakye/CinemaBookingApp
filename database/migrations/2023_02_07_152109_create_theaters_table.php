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
        Schema::create('theaters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('total_seats');
        });
        // Insert some users (inside the up-function!)
        DB::table('theaters')->insert(
            [
                [
                    'name' => 'cozy films',
                    'location' => '3rd floor',
                    'total_seats' => 100,
                ],
                [
                    'name' => 'crazy adventures',
                    'location' => '1st floor',
                    'total_seats' => 120,
                ],
                [
                    'name' => 'cinematic adventures',
                    'location' => '1st floor',
                    'total_seats' => 100,
                ],
                [
                    'name' => 'movie lovers',
                    'location' => '2nd floor',
                    'total_seats' => 110,
                ],
                [
                    'name' => 'the show goes on',
                    'location' => '2nd floor',
                    'total_seats' => 130,
                ],
                [
                    'name' => 'the film forum',
                    'location' => '5th floor',
                    'total_seats' => 100,
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
        Schema::dropIfExists('theaters');
    }
};
