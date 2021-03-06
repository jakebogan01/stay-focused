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
            'color_id' => $this->faker->numberBetween(1, 2),
            'priority_id' => $this->faker->numberBetween(1, 3),
//            'status_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->sentence(),
            'allotted_time' => $this->faker->numberBetween(5, 720),
            'more_time' => $this->faker->boolean(50),
        ];
    }
}
