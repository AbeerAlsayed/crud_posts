<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
//            'user_id'=>'1',
            'title'=>'First Post',
            'body'=>'This is My first post',
            'img'=>'1722778207.jpg',
        ]);
    }
}
