<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "name" => "Jesse",
            "message" => "Yo",
            "post_id" => 1
        ]);
        Comment::create([
            "name" => "Mike",
            "message" => "Walter.. Put ur",
            "post_id" => 1
        ]);
        Comment::create([
            "name" => "Rick",
            "message" => "CAROL",
            "post_id" => 2
        ]);
        Comment::create([
            "name" => "Karl",
            "message" => "DAD",
            "post_id" => 2
        ]);
    }
}
