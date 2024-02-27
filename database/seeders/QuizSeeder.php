<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'name' => 'Oefentoets - Blok 1',
        ])->questions()->attach([1, 2, 3, 10, 11, 4, 9]);

        Quiz::create([
            'name' => 'Eindtoets - Jaar 1',
        ])->questions()->attach([2, 3, 5, 6, 8, 9, 10, 12, 14, 15]);
    }
}
