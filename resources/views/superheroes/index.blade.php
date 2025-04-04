@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Superheroes</h1>
    <hr>
    <a href="{{ route('superheroes.create') }}">Create new superhero</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Real name</th>
                <th>Universe id</th>
                <th>Gender id</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->real_name }}</td>
                    <td>{{ $item->universe->name }}</td>
                    <td>{{ $item->gender->name }}</td>
                    <td>{{ $item->picture }}</td>
                    <td>
                        <a href="{{route('superheroes.show',$item->id) }}">Show</a>
                        <a href="{{route('superheroes.edit',$item->id) }}">Edit</a>
                        <form action="{{ route('superheroes.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick = "return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection