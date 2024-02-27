<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'C#',
        ]);

        Tag::create([
            'name' => 'PHP',
        ]);

        Tag::create([
            'name' => 'Laravel',
        ]);

        Tag::create([
            'name' => 'Database',
        ]);

        Tag::create([
            'name' => 'Wireframes',
        ]);

        Tag::create([
            'name' => 'Git',
        ]);

        Tag::create([
            'name' => 'API',
        ]);
    }
}
