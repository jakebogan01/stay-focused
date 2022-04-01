<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word(),
            'status' => $this->faker->word(),
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->sentence(),
            'priority_rating' => $this->faker->numberBetween($min = 1, $max = 3),
            'allotted_time' => $this->faker->time('1:00:00'),
            'colors' => $this->faker->word(),
            'more_time' => $this->faker->boolean($chanceOfGettingTrue = 50),

        ];
    }
}
