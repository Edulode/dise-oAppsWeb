@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe</title>
</head>
<body>
    <h1>Universe</h1>
    <hr>
    <a href="{{ route('universes.index') }}">Back</a>
    <hr>
<h2>Detalle del Registro</h2>
    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Name:</strong> {{ $universe->name }}</p>
</body>
</html>
@endsection