<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "title" => "Breaking Bad",
            "body" => "I am the one who knocks!"
        ]);
        Post::create([
            "title" => "The Walking Dead",
            "body" => "We are the walking dead..."
        ]);
    }
}
