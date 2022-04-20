<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['Development' => 0, 'Production' => 1, 'Front End' => 2, 'Back End' => 3];

        return [
            'name' => array_rand($categories)
        ];
    }
}
