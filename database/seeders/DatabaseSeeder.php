<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // filiere::create([
        //     'nom_filiere'=>'Informatique',
        // ]);
        // filiere::create([
        //     'nom_filiere'=>'Gestion',
        // ]);
        // filiere::create([
        //     'nom_filiere'=>'Journalisme',
        // ]);
        // filiere::create([
        //     'nom_filiere'=>'Comptabilité',
        // ]);



        // departement::create([
        //     'nom_departement'=>'Littoral',
        // ]);
        // departement::create([
        //     'nom_departement'=>'Attlantique',
        // ]);
        // departement::create([
        //     'nom_departement'=>'Mono',
        // ]);
        // departement::create([
        //     'nom_departement'=>'Zou',
        // ]);



        // arrondissement::create([
        //     'nom_arrondissement'=>'1er',
        //     'id_commune'=>'1',
        // ]);
        // arrondissement::create([
        //     'nom_arrondissement'=>'2eme',
        //     'id_commune'=>'2',
        // ]);
        // arrondissement::create([
        //     'nom_arrondissement'=>'3eme',
        //     'id_commune'=>'3',
        // ]);
        // arrondissement::create([
        //     'nom_arrondissement'=>'4eme',
        //     'id_commune'=>'4',
        // ]);


        // commune::create([
        //     'nom_commune'=>'Cotonou',
        //     'id_departement'=>'1',
        // ]);
        // commune::create([
        //     'nom_commune'=>'Lokossa',
        //     'id_departement'=>'2',
        // ]);
        // commune::create([
        //     'nom_commune'=>'Ouidah',
        //     'id_departement'=>'3',
        // ]);
        // commune::create([
        //     'nom_commune'=>'Bohicon',
        //     'id_departement'=>'4',
        // ]);



        village::create([
            'nom_village'=>'Glo',
            'id_arrondissement'=>'3',
        ]);
        village::create([
            'nom_village'=>'Adja',
            'id_arrondissement'=>'4',
        ]);
        village::create([
            'nom_village'=>'Come',
            'id_arrondissement'=>'5',
        ]);
        village::create([
            'nom_village'=>'Calavi',
            'id_arrondissement'=>'6',
        ]);
    }

}
