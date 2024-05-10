<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'Laravel',
        ]);

        DB::table('tags')->insert([
            'name' => 'React',
        ]);

        DB::table('tags')->insert([
            'name' => 'Vue JS',
        ]);

        DB::table('tags')->insert([
            'name' => 'Express JS',
        ]);
    }
}
