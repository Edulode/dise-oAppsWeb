@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gender</title>
</head>
<body>
    <h1>Edit Gender</h1>
    <hr>
    <a href="{{ route('genders.index') }}">Back</a>
    <hr>
    <form action="{{ route('genders.update', $genders->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $genders->name }}">
        <br>
        <br>
        <input type="submit" value="Update Gender">
    </form>
</body>
</html>
@endsection