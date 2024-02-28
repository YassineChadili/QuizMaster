<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'question_id' => 1,
            'answer' => 'C# is een programmeertaal ontwikkeld door Microsoft, terwijl PHP een open source programmeertaal is.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 1,
            'answer' => 'C# wordt voornamelijk gebruikt voor het ontwikkelen van desktop applicaties, terwijl PHP wordt gebruikt voor het ontwikkelen van webapplicaties.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 1,
            'answer' => 'C# maakt gebruik van het .NET framework, terwijl PHP geen specifiek framework heeft.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 2,
            'answer' => 'Laravel is een database management systeem.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 2,
            'answer' => 'Laravel is een PHP framework dat wordt gebruikt voor het bouwen van webapplicaties',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 2,
            'answer' => 'Laravel is een programmeertaal.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 3,
            'answer' => 'Een database is een programmeertaal.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 3,
            'answer' => 'Een database is een verzameling van gegevens die op een gestructureerde manier zijn opgeslagen.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 3,
            'answer' => 'Een database is een framework voor het ontwikkelen van webapplicaties.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 4,
            'answer' => 'Wireframes zijn schematische tekeningen die de structuur en lay-out van een website weergeven.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 4,
            'answer' => 'Wireframes zijn grafische elementen op een website.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 5,
            'answer' => 'Git is een database management systeem.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 5,
            'answer' => 'Git is een versiebeheersysteem dat wordt gebruikt voor het bijhouden van wijzigingen in broncode.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 5,
            'answer' => 'Git is een versiebeheersysteem dat wordt gebruikt voor het bijhouden van wijzigingen in broncode.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 6,
            'answer' => 'Een primary key identificeert uniek een rij in een tabel, terwijl een foreign key verwijst naar een primary key in een andere tabel.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 6,
            'answer' => 'Een primary key is een programmeertaal, terwijl een foreign key een database management systeem is.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 6,
            'answer' => 'en primary key is een framework voor het ontwikkelen van webapplicaties, terwijl een foreign key een versiebeheersysteem is.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 7,
            'answer' => 'API is een programmeertaal.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 7,
            'answer' => 'Een API is een database management systeem.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 7,
            'answer' => ' Een API (Application Programming Interface) wordt gebruikt om verschillende softwareapplicaties met elkaar te laten communiceren.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 8,
            'answer' => 'Versiebeheer is een database management systeem.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 8,
            'answer' => 'Versiebeheer helpt bij het bijhouden van wijzigingen in de broncode en maakt samenwerking tussen ontwikkelaars eenvoudiger.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 9,
            'answer' => 'Een JOIN statement wordt gebruikt om gegevens uit meerdere tabellen te combineren op basis van een gemeenschappelijke sleutel.',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => 9,
            'answer' => ' Een JOIN statement is een framework voor het ontwikkelen van webapplicaties',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 10,
            'answer' => 'Een inner join is een framework voor het ontwikkelen van webapplicaties, terwijl een outer join een versiebeheersysteem is.',
            'is_correct' => false,
        ]);


        Answer::create([
            'question_id' => 10,
            'answer' => 'Een inner join is een database management systeem, terwijl een outer join een programmeertaal is.',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => 10,
            'answer' => 'Een inner join retourneert alleen rijen die overeenkomen in beide tabellen, terwijl een outer join ook rijen retourneert die geen overeenkomst hebben.',
            'is_correct' => true,
        ]);
    }
}
