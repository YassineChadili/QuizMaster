<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'question' => 'Wat is het verschil tussen C# en PHP?',
            'type' => 'multiple choice',
        ])->tags()->attach([1, 2]);

        Question::create([
            'question' => 'Wat is het doel van Laravel in webontwikkeling?',
            'type' => 'multiple choice',
        ])->tags()->attach([3]);

        Question::create([
            'question' => 'Wat is een database?',
            'type' => 'multiple choice',
        ])->tags()->attach([4]);

        Question::create([
            'question' => 'Wat zijn wireframes in webdesign?',
            'type' => 'multiple choice',
        ])->tags()->attach([5]);

        Question::create([
            'question' => 'Wat is Git en waar wordt het voor gebruikt?',
            'type' => 'multiple choice',
        ])->tags()->attach([6]);

        Question::create([
            'question' => 'Wat is het verschil tussen een primary key en een foreign key in een database?',
            'type' => 'multiple choice',
        ])->tags()->attach([4]);

        Question::create([
            'question' => 'Wat is het doel van een API in software development?',
            'type' => 'multiple choice',
        ])->tags()->attach([7]);

        Question::create([
            'question' => 'Wat is het belang van het gebruik van versiebeheer in software development?',
            'type' => 'multiple choice',
        ])->tags()->attach([6]);

        Question::create([
            'question' => 'Wat is het doel van een JOIN statement in een database query?',
            'type' => 'multiple choice',
        ])->tags()->attach([4]);

        Question::create([
            'question' => 'Wat is het verschil tussen een inner join en een outer join in SQL?',
            'type' => 'multiple choice',
        ])->tags()->attach([]);

        Question::create([
            'question' => 'Hoe zou je de voordelen van het gebruik van een MVC framework in webontwikkeling uitleggen?',
            'type' => 'open',
        ]);

        Question::create([
            'question' => 'Wat zijn enkele mogelijke toepassingen van dependency injection in software development?',
            'type' => 'open',
        ]);

        Question::create([
            'question' => 'Hoe zou je het concept van object georiënteerd programmeren uitleggen aan iemand die nieuw is in de wereld van softwareontwikkeling?',
            'type' => 'open',
        ]);

        Question::create([
            'question' => 'Welke overwegingen moet je maken bij het ontwerpen van een database schema voor een complexe webapplicatie?',
            'type' => 'open',
        ])->tags()->attach([4]);

        Question::create([
            'question' => 'Hoe zou je het belang van het gebruik van wireframes in het ontwerpproces van een website benadrukken? ',
            'type' => 'open',
        ])->tags()->attach([5]);

        Question::create([
            'question' => 'Op welke manieren kan het gebruik van Git bijdragen aan een efficiëntere samenwerking binnen een ontwikkelingsteam?',
            'type' => 'open',
        ])->tags()->attach([6]);

        Question::create([
            'question' => 'Hoe zou je de rol van indexen in een database uitleggen aan iemand die nieuw is in het concept van database-optimalisatie?',
            'type' => 'open',
        ])->tags()->attach([4]);

        Question::create([
            'question' => 'Wat zijn enkele best practices voor het implementeren van versiebeheer in een softwareontwikkelingsproject?',
            'type' => 'open',
        ]);

        Question::create([
            'question' => 'Hoe zou je het concept van een API uitleggen aan een niet-technisch persoon',
            'type' => 'open',
        ])->tags()->attach([7]);

        Question::create([
            'question' => 'Welke uitdagingen kom je vaak tegen bij het ontwikkelen van webapplicaties met meerdere programmeertalen zoals C# en PHP?',
            'type' => 'open',
        ])->tags()->attach([1, 2]);
    }
}
