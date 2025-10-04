<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Lesson extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            \App\Models\Lesson::factory(30)->create();
    }
}
