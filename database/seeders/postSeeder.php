<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id'        => 1,
                'title'     => 'Post 1'
            ],
            [
                'id'        => 2,
                'title'     => 'Post 2'
            ],
        ];

        Post::insert($posts);
    }
}
