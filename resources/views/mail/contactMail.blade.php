<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Hi {{$contact['name']}}, thanks for contact us!
    </h1>
    <h2>
        You will be contacted at {{$contact['email']}}
    </h2>
    <h2>
        Recap of your message:
    </h2>
    <p>
        {{$contact['text']}}
    </p>
</body>
</html>