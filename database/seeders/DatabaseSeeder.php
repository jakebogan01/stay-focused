<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create();

        User::factory()
            ->hasAttached(Block::factory()->count(5))
            ->count(2)
            ->create();

        Block::factory()
            ->hasAttached(Task::factory()->count(5))
            ->count(2)
            ->create();

        Category::factory()->count(3)->create();
    }
}
