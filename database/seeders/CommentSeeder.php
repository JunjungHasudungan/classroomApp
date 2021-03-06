<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'id'        => 1,
                'title'     => 'Comment 1',
                'post_id'   => 1
            ],
            [
                'id'        => 2,
                'title'     => 'Comment 1',
                'post_id'   => 2
            ],
        ];
        Comment::insert($comments);
    }
}
