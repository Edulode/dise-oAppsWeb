@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
<h1>Gender</h1>
    <hr>
    <a href="{{ route('genders.index') }}">Back</a>
    <hr>
<h2>Detalle del Registro</h2>
    <p><strong>ID:</strong> {{ $gender->id }}</p>
    <p><strong>Name:</strong> {{ $gender->name }}</p>
    <p><strong>Created at:</strong> {{ $gender->created_at }}</p>
    <p><strong>Updated at:</strong> {{ $gender->updated_at }}</p>
</body>
</html>
@endsection