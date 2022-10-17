<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>name</th>
            <th colspan="2">Action</th>
        </tr>
        <tbody>
            @foreach ($select as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td><a value="{{$row->id}}" href="/delete/{{$row->id}}">delete</a></td>
                <td><a value="{{$row->id}}" href="/edit/{{$row->id}}">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>