<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'body' => 'Comment 1',
            'post_id' => '1',
        ]);

        DB::table('comments')->insert([
            'body' => 'Comment 2',
            'post_id' => '1',
        ]);
    }
}
