<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(3)->create();
        //Es importante la jerarquia de creación por las relaciones establecidas en los Factories
        Course::factory(10)->create();
        Post::factory(90)->create();
    }
}
