<style>
    table,
    td,
    thead {
        border-collapse: collapse;
        border: 1px solid #000;
        margin: 20px auto;
    }

    td {
        font-weight: bold;
        padding: 30px;

    }
</style>

<main>

    <h2>Liste des clusters</h2>
    <table>
        <thead>
            <tr>
                <td>Filieres</td>
                <td>Departement</td>
                <td>Commune</td>
                <td>Arrondissement</td>
                <td>village</td>
                <td>Nom du cluster</td>
            </tr>
        </thead>

        <tbody>

            @foreach($clusters as $cluster)

            <tr>
                <td>{{ $cluster?->filiere?->nom_filiere }}</td>
                <td>{{ $cluster?->village->arrondissement?->commune?->departement?->nom_departement }}</td>
                <td>{{ $cluster?->village->arrondissement?->commune?->nom_commune }}</td>
                <td>{{ $cluster?->village?->arrondissement?->nom_arrondissement }}</td>
                <td>{{ $cluster?->village?->nom_village }}</td>
                <td>{{ $cluster->nom_cluster }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>