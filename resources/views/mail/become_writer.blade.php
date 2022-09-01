<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bainans</title>
</head>
<body>
    <div>
        <h1>A user asked to join our writer team.</h1>
        <h2>User's info</h2>
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>If you want to let user become a writer, click here:</p>
        <a href="{{route('make.writer', compact('user'))}}">Make writer</a>
    </div>
</body>
</html>