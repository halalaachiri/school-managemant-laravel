<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
</head>
<body>

    <h1>Gestion des étudiants</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('students.create') }}">Ajouter un étudiant</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->section }}</td>
                    <td>
                        @if($student->image)
                            <img src="{{ asset('storage/' . $student->image) }}"
                                 width="60" alt="Photo étudiant">
                        @else
                            Aucune image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">Voir</a>
                        |
                        <a href="{{ route('students.edit', $student->id) }}">Modifier</a>

                        <form action="{{ route('students.destroy', $student->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Supprimer cet étudiant ?')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Aucun étudiant enregistré.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>