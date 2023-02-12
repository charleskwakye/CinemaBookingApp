<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('active')->default(true);
            $table->boolean('admin')->default(false);
            $table->string('phone', 10);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->boolean('registered');
            $table->rememberToken();
            $table->timestamps();
        });
        // Insert some users (inside the up-function!)
        DB::table('users')->insert(
            [
                [
                    'first_name' => "Charles",
                    'last_name'=>"Kwakye",
                    'email' => "charles.kwakye@example.com",
                    'active' => true,
                    'admin' =>true,
                    'phone'=>'0439134521',
                    'email_verified_at' => now(),
                    'password' => Hash::make('admin1234'),
                    'address'=>"Kleinhoefstraat 4, 2440 Geel",
                    'profile_photo_path' =>null,
                    'registered'=>1,
                    'created_at' => now(),


                ],
                [
                    'first_name' => "Jane",
                    'last_name'=>"Doe",
                    'email' => "jane.doe@example.com",
                    'active' => true,
                    'admin' =>false,
                    'phone'=>'0439134521',
                    'email_verified_at' => now(),
                    'password' => Hash::make('user1234'),
                    'address'=>"BlueStreet 2, 2440 Antwerpen",
                    'profile_photo_path' =>null,
                    'registered'=>0,
                    'created_at' => now(),
                ]
            ]
        );

        // Add 40 dummy users inside a loop
        for ($i = 0; $i <= 40; $i++) {
            // Every 6th user, $active is false (0) else true (1)
            $active = ($i + 1) % 6 !== 0;
            DB::table('users')->insert(
                [
                    'first_name' => "Cinema",
                    'last_name'=>"User $i",
                    'email' => "cinema_user_$i@mailinator.com",
                    'active' => $active,
                    'admin' =>$active,
                    'phone'=>'0453757285',
                    'email_verified_at' => now(),
                    'password' => Hash::make("cinemauser$i"),
                    'address'=>"Gymstreat $i,2440 Geel",
                    'profile_photo_path' =>null,
                    'registered'=>$active,
                    'created_at' => now(),



                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
