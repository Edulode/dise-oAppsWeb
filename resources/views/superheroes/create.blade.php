<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create superhero</title>
</head>
<body>
    <h1>Create Superheroe</h1>
    <hr>
    <a href="{{ route('superheroes.index') }}">Back</a>
    <hr>
    <form action="{{ route('superheroes.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="real_name">Real Name</label>
        <input type="text" name = "real_name">
        <br>
        <label for="">Universe</label>
        <select name="universe_id" id="">
            @foreach ($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Gender</label>
        <select name="gender_id" id="">
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="picture">Picture</label>
        <input type="text" name = "picture">
        <br>
        <input type="submit" value="Create Superheroe">
    </form>
</body>
</html>