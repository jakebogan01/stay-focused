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
            'category_id' => $this->faker->numberBetween(1, 3),
            'color_id' => $this->faker->numberBetween(1, 10),
            'priority_rating_id' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->word(),
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->sentence(),
            'priority_rating' => $this->faker->numberBetween(1, 3),
            'allotted_time' => $this->faker->time('1:00:00'),
            'colors' => $this->faker->word(),
            'more_time' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
