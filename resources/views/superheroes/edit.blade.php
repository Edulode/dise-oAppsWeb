<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit superhero</title>
</head>
<body>
    <h1>Edit Superheroe</h1>
    <hr>
    <a href="{{ route('superheroes.index') }}">Back</a>
    <hr>
    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $superheroe->name }}">
        <br>
        <label for="real_name">Real Name</label>
        <input type="text" name = "real_name"  value="{{ $superheroe->real_name }}">
        <br>
        <label for="">Universe</label>
        <select name="universe_id" id="">
            @foreach ($universes as $universe)
                <option value="{{ $universe->id }}">
                    @if ($universe->id == $superheroe->universe_id) 
                        selected
                    @endif
                    {{ $universe->name }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="">Gender</label>
        <select name="gender_id" id="">
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">
                    @if ($gender->id == $superheroe->gender_id) 
                        selected
                    @endif
                    {{ $gender->name }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="picture">Picture</label>
        <input type="text" name = "picture" value="{{ $superheroe->picture }}">
        <br>
        <input type="submit" value="Update Superheroe">
    </form>
</body>
</html>