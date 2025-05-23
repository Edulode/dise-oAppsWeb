@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>
    <hr>
    <a href="{{ route('universes.index') }}">Back</a>
    <hr>
    <form action="{{ route('universes.update', $universe->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}">
        <br>
        <br>
        <input type="submit" value="Update Universe">
    </form>
</body>
</html>
@endsection