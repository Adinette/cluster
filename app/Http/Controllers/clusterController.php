<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filiere;
use App\Models\departement;
use App\Models\commune;
use App\Models\cluster;
use App\Models\arrondissement;
use App\Models\village;

class clusterController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        $departements = Departement::all();
        $communes = Commune::all(); // Récupérez toutes les œuvres
        $clusters = Cluster::all();
        $arrondissements = Arrondissement::all();
        $villages = Village::all();
        return view('formulaire', compact('filieres', 'departements', 'communes', 'clusters', 'arrondissements', 'villages'));
    }
    // Enregistrer la validation du formulaire dans la base de donnée
    public function store(Request $_request)
    {
        $departement = Departement::all();
        $commune = Commune::all(); // Récupérez toutes les œuvres

        $arrondissement = Arrondissement::all();

        $id_filiere = $_request->input('id_filiere');
        $nom_departement = $_request->input('nom_departement');
        $nom_commune = $_request->input('nom_commune');
        $nom_arrondissement = $_request->input('nom_arrondissement');
        $id_villages = $_request->input('id_village');
        $nom_cluster = $_request->input('nom_cluster');

        $cluster = new cluster();

        $cluster->filiere_id = $id_filiere;
        $cluster->village_id = $id_villages;
        $cluster->nom_cluster = $nom_cluster;

        $cluster->save();
        $clusters = Cluster::with(['filiere', 'village.arrondissement.commune.departement'])->orderBy('nom_cluster')->get();
        return view('liste', compact('departement', 'commune', 'clusters', 'arrondissement'));
    }

    public function recupererCommunes()
    {
        $clusters = Cluster::with(['filiere', 'village.arrondissement.commune.departement'])->orderBy('nom_cluster')->get();
        dd($clusters);
    }
}
