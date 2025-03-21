<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroe</title>
</head>
<body>
    <hr>
    <a href="{{ route('superheroes.index') }}">Back</a>
    <hr>
    <h2>Detalle del Registro</h2>
    <p><strong>ID:</strong> {{ $superheroe->id }}</p>
    <p><strong>Name:</strong> {{ $superheroe->name }}</p>
    <p><strong>Real Name:</strong> {{ $superheroe->real_name }}</p>
    <p><strong>Universe:</strong> {{ $superheroe->universe->name }}</p>
    <p><strong>Gender:</strong> {{ $superheroe->gender->name }}</p>
    <p><strong>Picture:</strong> {{ $superheroe->picture }}</p>
    <p><strong>Created at:</strong> {{ $superheroe->created_at }}</p>
    <p><strong>Updated at:</strong> {{ $superheroe->updated_at }}</p>
</body>
</html>