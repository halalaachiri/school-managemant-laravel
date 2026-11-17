<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'étudiant</title>
</head>
<body>

    <h1>Détails de l'étudiant</h1>

    <p><strong>ID :</strong> {{ $student->id }}</p>
    <p><strong>Nom :</strong> {{ $student->name }}</p>
    <p><strong>Email :</strong> {{ $student->email }}</p>
    <p><strong>Téléphone :</strong> {{ $student->phone }}</p>
    <p><strong>Section :</strong> {{ $student->section }}</p>

    <p><strong>Image :</strong></p>

    @if($student->image)
        <img src="{{ asset('storage/' . $student->image) }}"
             width="150" alt="Photo de l'étudiant">
    @else
        <p>Aucune image disponible.</p>
    @endif

    <br><br>

    <a href="{{ route('students.edit', $student->id) }}">Modifier</a>
    |
    <a href="{{ route('students.index') }}">Retour à la liste</a>

</body>
</html>