<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            DB::table('participants')->insert(
                [
                'fname' => $faker->firstname,
                'lname' => $faker->lastname,
                'email' => $faker->email,
                'phonenumber' => $faker->phoneNumber,
                'content' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'program_id' => $faker->numberBetween($min = 1, $max = 10),
                ]
            );

        }
    }
}
