<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\filiere;
use App\Models\departement;
use App\Models\commune;
use App\Models\cluster;
use App\Models\arrondissement;
use App\Models\village;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        filiere::create([
            'nom_filiere' => 'Informatique',
        ]);
        filiere::create([
            'nom_filiere' => 'Gestion',
        ]);
        filiere::create([
            'nom_filiere' => 'Journalisme',
        ]);
        filiere::create([
            'nom_filiere' => 'Comptabilité',
        ]);



        departement::create([
            'nom_departement' => 'Littoral',
        ]);
        departement::create([
            'nom_departement' => 'Attlantique',
        ]);
        departement::create([
            'nom_departement' => 'Mono',
        ]);
        departement::create([
            'nom_departement' => 'Zou',
        ]);




        commune::create([
            'nom_commune' => 'Cotonou',
            'departement_id' => 1,
        ]);
        commune::create([
            'nom_commune' => 'Lokossa',
            'departement_id' => 2,
        ]);
        commune::create([
            'nom_commune' => 'Ouidah',
            'departement_id' => 3,
        ]);
        commune::create([
            'nom_commune' => 'Bohicon',
            'departement_id' => '4',
        ]);



        arrondissement::create([
            'nom_arrondissement' => '1er',
            'commune_id' => 1,
        ]);
        arrondissement::create([
            'nom_arrondissement' => '2eme',
            'commune_id' => 2,
        ]);
        arrondissement::create([
            'nom_arrondissement' => '3eme',
            'commune_id' => 3,
        ]);
        arrondissement::create([
            'nom_arrondissement' => '4eme',
            'commune_id' => 4,
        ]);

        village::create([
            'nom_village' => 'Glo',
            'arrondissement_id' => 1,
        ]);
        village::create([
            'nom_village' => 'Adja',
            'arrondissement_id' => 2,
        ]);
        village::create([
            'nom_village' => 'Come',
            'arrondissement_id' => 3,
        ]);
        village::create([
            'nom_village' => 'Calavi',
            'arrondissement_id' => 4,
        ]);
    }
}
