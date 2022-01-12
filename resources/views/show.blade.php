<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show single comic</title>
</head>
<body>
    <h1>Show page</h1>
    <a href="{{route('comics.index')}} ">torna alla home</a>
    @dump($comic)
</body>
</html>