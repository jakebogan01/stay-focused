<?php

namespace Database\Factories;

use App\Models\Priority;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PriorityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Priority::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ratings = ['High' => 0, 'Medium' => 1, 'Low' => 2];

        return [
            'name' => array_rand($ratings),
        ];
    }
}
