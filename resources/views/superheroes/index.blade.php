<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Superheroes</h1>
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
                    <td>{{ $item->universe_id }}</td>
                    <td>{{ $item->gender_id }}</td>
                    <td>{{ $item->picture }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>