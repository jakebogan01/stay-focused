<?php

namespace Database\Factories;

use App\Models\PriorityRating;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PriorityRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PriorityRating::class;

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
