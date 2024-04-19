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
            'date' => $this->faker->dateTime(),
            'user_id' => User::factory(),
            'letter_type' => $this->faker->word(),
        ];
    }
}
