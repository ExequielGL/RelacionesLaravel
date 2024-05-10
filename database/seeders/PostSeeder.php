<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Post 1',
            'content' => 'Content 1',
            'categoria' => 'Categoria 1',
            'published_at' => now(),
            'is_active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 2',
            'content' => 'Content 2',
            'categoria' => 'Categoria 2',
            'published_at' => now(),
            'is_active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 3',
            'content' => 'Content 3',
            'categoria' => 'Categoria 3',
            'published_at' => now(),
            'is_active' => true,
        ]);
    }
}
