<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update" method="POST">
        @csrf
        <input type="text" name="name" value="<?php echo $data->name; ?>">
        <input type="hidden" name="id" value="<?php echo $data->id; ?>">
        <br>
        <button type="submit" value="">submit</button>
    </form>
</body>
</html>