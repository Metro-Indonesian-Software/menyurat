<?php

namespace Database\Seeders;

use App\Models\CommonLetterLog;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Config;

class CommonLetterLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(Config::get("app.faker_locale"));
        $letters = config("central.letter_types");

        foreach($letters as $key => $value) {
            CommonLetterLog::create([
                'user_id' => $faker->randomNumber(1, 10),
                'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                'type' => $key,
            ]);
        }
    }
}
