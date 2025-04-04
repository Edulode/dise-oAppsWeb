@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create gender</title>
</head>
<body>
<h1>Gender</h1>
    <hr>
    <a href="{{ route('genders.index') }}">Back</a>
    <hr>
    <h1>Create gender</h1>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <input type="submit" value="Create gender">
    </form>
</body>
</html>
@endsection