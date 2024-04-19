<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CommonLetterLog;
use App\Models\LetterLog;

class LetterLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LetterLog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'common_letter_log_id' => CommonLetterLog::factory(),
            'field_name' => $this->faker->word(),
            'field_value' => $this->faker->text(),
        ];
    }
}
