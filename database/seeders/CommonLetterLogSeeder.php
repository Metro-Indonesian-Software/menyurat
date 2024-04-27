<?php

namespace Database\Seeders;

use App\Models\CommonLetterLog;
use App\Models\User;
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
        $users = User::role("user")->get();

        foreach($letters as $key => $value) {
            foreach($users as $user) {
                CommonLetterLog::create([
                    'user_id' => $user->id,
                    'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                    'type' => $key,
                ]);
            }
        }
    }
}
