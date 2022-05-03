<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/style/style.css" rel="stylesheet">

    <title>Laravel</title>
</head>
<body>
    <header>
        <a href="{{ @route('home')}}">Home</a>
        <a href="{{ @route('about')}}">About</a>
        <a href="{{ @route('contact')}}">Contact Us</a>
    </header>
    <main>
        <h1>
            {{ $txt }}
        </h1>
    </main>
</body>
</html>
