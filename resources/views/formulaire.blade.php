<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}

    <title>Formulaire</title>
</head>
<body>
    <form action="{{route('index.store')}}" method="POST" style="margin: 2rem 1rem">
        @csrf
        <h1 style="text-align: center">SAISIE DES cluters</h1>
        <div>
            <label for="">Filière </label>
            <select name="nom_filiere" required style="margin-left: 6.5rem; box-shadow:none; height:35px;">
                @foreach($filieres as $filiere)
                    <option value="{{$filiere->id_filiere}}"> {{$filiere->nom_filiere}}</option>
                @endforeach
            </select>
        </div>
       <div style="display: flex">
        <div style="margin: 1rem 0rem">
            <label for="">Departement </label>
            <select name="nom_departement" required style="margin-left: 6.5rem; box-shadow:none; height:35px;">
                @foreach($departements as $departement)
                    <option value="{{$departement->id_departement}}"> {{$departement->nom_departement}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Commune </label>
            <select name="nom_commune" required style="margin-left: 6.5rem; box-shadow:none; height:35px;">
                @foreach($communes as $commune)
                    <option value="{{$commune->id_commune}}"> {{$commune->nom_commune}}</option>
                @endforeach
            </select>
        </div>
       </div>
        <div style="display: flex">
            <div style="margin: 1rem 0rem">
                <label for="">Arrondissement </label>
                <select name="nom_arrondissement" required style="margin-left: 6.5rem; box-shadow:none; height:35px;">
                    @foreach($arrondissements as $arrondissement)
                        <option value="{{$arrondissement->id_arrondissement}}"> {{$arrondissement->nom_arrondissement}}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin: 1rem 0rem">
                <label for="">Village </label>
                <select name="nom_village" required style="margin-left: 6.5rem; box-shadow:none; height:35px;">
                    @foreach($villages as $village)
                        <option value="{{$village->id_villages}}"> {{$village->nom_village}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div style="margin: 1rem 0rem">
            <label for="">Nom du cluster </label>
            <input type="text " name="nom_cluster" id="" style="box-shadow:none; width:170px; margin-left: 1.6rem; height:35px;">
        </div>
        <div style="">
            <button style="margin-right: 2rem;  width:100px; height:34px; background-color: #00C0EF;  color:white; font-weight:500; border:none" type="reset">Effacer</button>
            <button style=" width:100px; height:34px; background-color: #F39C12; color:white ; font-weight:500; border:none" type="submit">Enregistrer</button>
        </div>
    </form>
</body>
</html>
<style>
    body{
    font-size: 12px;
    font-family: Arial;
    background-color: #ECF0F5;
} n
/* table,
            td,
            thead {
                border-collapse: collapse;
                border: 1px solid #000;
                margin: 20px auto;
            }

            td {
                font-weight: bold;
                padding: 30px;

            } */
</style>
