<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seederat
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(5)->create();
        //
    }
}
