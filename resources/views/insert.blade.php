<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/insert_query" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="hidden" name="id">
        <br>
        <button type="submit" value="">submit</button>
    </form>
</body>
</html>