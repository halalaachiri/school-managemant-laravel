<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un étudiant</title>
</head>
<body>

    <h1>Ajouter un étudiant</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Téléphone :</label>
        <input type="text" name="phone" value="{{ old('phone') }}" required>
        <br><br>

        <label>Section :</label>
        <input type="text" name="section" value="{{ old('section') }}" required>
        <br><br>

        <label>Image :</label>
        <input type="file" name="image" accept="image/*">
        <br><br>

        <button type="submit">Enregistrer</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Retour à la liste</a>

</body>
</html>