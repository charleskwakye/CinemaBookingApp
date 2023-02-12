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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('theater_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('row');
            $table->integer('number');
        });


        $rows = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T");
        $number_counter = 0;
        $counter = 0;
        $alphabet_counter = 0;

        for ($id = 1; $id <= 6; $id++) {
            $max_iterations = [100, 120, 100, 110, 130, 100][$id - 1];

            for ($i = 0; $i < $max_iterations; $i++) {
                $number_counter++;
                $counter++;
                if ($counter > 10) {
                    $alphabet_counter++;
                    $counter = 1;
                }
                DB::table('seats')->insert(
                    [
                        'theater_id' => $id,
                        'row' => $rows[$alphabet_counter],
                        'number' => $counter
                    ]
                );
            }

            $number_counter = 0;
            $counter = 0;
            $alphabet_counter = 0;
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seats');
    }
};
