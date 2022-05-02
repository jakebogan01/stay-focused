<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Block;
use App\Models\Color;
use App\Models\Status;
use App\Models\Category;
use App\Models\Priority;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // general user: test
        User::create([
            'role' => 'Admin',
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        // default categories
        DB::table('categories')->insert([
            [
                'name' => 'Development',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Production',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Sales',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Emails',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ]);

        // default colors
        DB::table('colors')->insert([
            [
                'name' => 'Red',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Blue',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ]);

        // default priorities
        DB::table('priorities')->insert([
            [
                'name' => 'High',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Medium',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Low',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ]);

        // default statuses
        DB::table('statuses')->insert([
            [
                'name' => 'Pending',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'In Progress',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Completed',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ]);

//        User::factory()
//            ->hasAttached(Block::factory()->count(5))
//            ->count(2)
//            ->create();

//        Block::factory()
//            ->hasAttached(Task::factory()->count(5))
//            ->count(2)
//            ->create();
    }
}
