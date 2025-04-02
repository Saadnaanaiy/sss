<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management Dashboard</title>
</head>
<body>
    <!-- Developers Table -->
    <h2>Developers Main Table</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>CV</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devs as $dev)
            <tr>
                <td>{{ $dev->prenomD }}</td>
                <td>{{ $dev->nomD }}</td>
                <td>{{ $dev->cv }}</td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Sophie's Team Section -->
    <h2>Sophie's Team Members</h2>
    <hr>
    @foreach ($devs_Sophie as $dev_Sophie)
        <p>{{ $dev_Sophie->prenomD }}</p>
        <p>{{$dev_Sophie->nomD}}</p>
        <p>{{$dev_Sophie->cv}}</p>
    @endforeach

    <!-- Projects Section -->
    <h2>Project Details</h2>
    <hr>
    @foreach ($projets as $pr)
        <p>{{ $pr->nomP }}</p>
        <p>{{$pr->description}}</p>
        <p>{{$pr->created_at}}</p>
    @endforeach

    <!-- All Tasks Table -->
    <h2>All Tasks Overview</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Durée</th>
                <th>Coût par heure</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taches as $tc)
            <tr>
                <td>{{ $tc->dureeHeure }}</td>
                <td>{{ $tc->coutHeure }}</td>
                <td>{{ $tc->etat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Query Tasks Table -->
    <h2>Filtered Tasks List</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Durée</th>
                <th>Coût par heure</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taches_query as $tq)
            <tr>
                <td>{{ $tq->dureeHeure }}</td>
                <td>{{ $tq->coutHeure }}</td>
                <td>{{ $tq->etat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Developer Tasks Table -->
    <h2>Tasks By Developer</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Durée</th>
                <th>Coût par heure</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taches_dev as $td)
            <tr>
                <td>{{ $td->dureeHeure }}</td>
                <td>{{ $td->coutHeure }}</td>
                <td>{{ $td->etat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Cost-based Tasks Table -->
    <h2>Tasks By Cost</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Durée</th>
                <th>Coût par heure</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taches_cout as $tc)
            <tr>
                <td>{{ $tc->dureeHeure }}</td>
                <td>{{ $tc->coutHeure }}</td>
                <td>{{ $tc->etat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
