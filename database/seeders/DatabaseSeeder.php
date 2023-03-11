<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        Category::Create([
            'name' => 'Web Programming',
            'slug' => 'web programming'
        ]);
        category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        category::create([
            'name' => 'Desain',
            'slug' => 'desain'
        ]);

        User::factory(5)->create();
        Post::factory(50)->create();
    }
}
