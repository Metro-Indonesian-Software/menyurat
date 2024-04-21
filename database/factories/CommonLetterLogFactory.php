<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CommonLetterLog;
use App\Models\User;

class CommonLetterLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommonLetterLog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(1, 10),
            'title' => $this->faker->realText($maxNbChars = 30, $indexSize = 2),
            'type' => $this->faker->randomKey(config("central.letter_types")),
        ];
    }
}
