<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <title>Document</title>
</head>
<body>
    <h1>Tu nombre es {{ $user->username }}</h1>
</body>
</html>