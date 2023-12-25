<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="location" value="{{ $info->location }}" placeholder="Update your destination">
        <button type="submit">Update</button>
    </form>
</body>
</html>


