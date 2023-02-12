<?php

use Carbon\Carbon;
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->integer('tmdb_id');
            $table->string('title');
            $table->integer('length');
            $table->date('release_date');
            $table->integer('rating');
            $table->string('genre');
            $table->longText('summary');
            $table->string('cover_image')->nullable();
            $table->string('language')->default("English")->nullable();
            $table->timestamps();

        });
        DB::table('movies')->insert(
            [
                [
                    'tmdb_id' => 123456,
                    'title' => 'Avengers: Endgame',
                    'length' => 120,
                    'release_date' => Carbon::parse('2019-04-29 10:00:00'),
                    'rating' => 80,
                    'genre' => 'action',
                    'summary' => 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Jurassic Park',
                    'length' => 127,
                    'release_date' => Carbon::parse('1993-06-11 10:00:00'),
                    'rating' => 63,
                    'genre' => 'Sci-Fi',
                    'summary' => 'A billionaire entrepreneur invites a group of scientists and his two grandchildren to his island theme park of genetically recreated dinosaurs, but things take a turn for the worse when the creatures break loose.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Shawshank Redemption',
                    'length' => 142,
                    'release_date' => Carbon::parse('1994-09-23 10:00:00'),
                    'rating' => 72,
                    'genre' => 'Crime',
                    'summary' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Godfather',
                    'length' => 175,
                    'release_date' => Carbon::parse('1972-03-24 10:00:00'),
                    'rating' => 67,
                    'genre' => 'Crime',
                    'summary' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Matrix',
                    'length' => 136,
                    'release_date' => Carbon::parse('1999-03-31 10:00:00'),
                    'rating' => 73,
                    'genre' => 'Sci-Fi',
                    'summary' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Inception',
                    'length' => 148,
                    'release_date' => Carbon::parse('2010-07-16 10:00:00'),
                    'rating' => 74,
                    'genre' => 'Sci-Fi',
                    'summary' => 'A skilled extractor is offered a chance to regain his old life as payment for a task considered to be impossible: "inception", the implantation of another person\'s idea into a target\'s subconscious.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Silence of the Lambs',
                    'length' => 118,
                    'release_date' => Carbon::parse('1991-02-14 10:00:00'),
                    'rating' => 76,
                    'genre' => 'Thriller',
                    'summary' => 'A young F.B.I. cadet must confide in an incarcerated cannibalistic killer to receive his help on catching another serial killer who skins his victims.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Dark Knight',
                    'length' => 152,
                    'release_date' => Carbon::parse('2008-07-18 10:00:00'),
                    'rating' => 48,
                    'genre' => 'Action',
                    'summary' => 'With the help of allies Lt. Jim Gordon and DA Harvey Dent, Batman has been able to keep a tight lid on crime in Gotham City. But when a vile young criminal calling himself the Joker suddenly throws the town into chaos, the Caped Crusader begins to tread a fine line between heroism and vigilantism.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Pulp Fiction',
                    'length' => 154,
                    'release_date' => Carbon::parse('1994-10-14 10:00:00'),
                    'rating' => 86,
                    'genre' => 'Drama',
                    'summary' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Fight Club',
                    'length' => 139,
                    'release_date' => Carbon::parse('1999-10-15 10:00:00'),
                    'rating' => 66,
                    'genre' => 'Drama',
                    'summary' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Star Wars: Episode IV - A New Hope',
                    'length' => 121,
                    'release_date' => Carbon::parse('1977-05-25 10:00:00'),
                    'rating' => 67,
                    'genre' => 'Fantasy',
                    'summary' => 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the evil Darth Vader.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Forrest Gump',
                    'length' => 142,
                    'release_date' => Carbon::parse('1994-07-06 10:00:00'),
                    'rating' => 40,
                    'genre' => 'Romance',
                    'summary' => 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Lion King',
                    'length' => 89,
                    'release_date' => Carbon::parse('1994-06-15 10:00:00'),
                    'rating' => 81,
                    'genre' => 'Animation',
                    'summary' => 'A lion prince is born in Africa, thus making his uncle Scar the second in line to the throne. Scar plots with the hyenas to kill King Mufasa and Prince Simba, thus making himself King. The King\'s son, Simba, flees accusations, guilt and the Pride Land meeting new friends along the way who teach him a worry-free philosophy. But Simba must take responsibility for his actions and return to Pride Rock to overthrow the usurper, Scar.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'The Prestige',
                    'length' => 130,
                    'release_date' => Carbon::parse('2006-10-20 10:00:00'),
                    'rating' => 78,
                    'genre' => 'Mystery',
                    'summary' => 'Two stage magicians engage in competitive one-upmanship in an attempt to create the ultimate stage illusion.',
                    'created_at' => now()
                ],
                [
                    'tmdb_id' => 123456,
                    'title' => 'Goodfellas',
                    'length' => 146,
                    'release_date' => Carbon::parse('1990-09-19 10:00:00'),
                    'rating' => 73,
                    'genre' => 'Crime',
                    'summary' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate.',
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
        Schema::dropIfExists('movies');
    }
};
