<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    <h1>Comics</h1>

    <a href="{{route('comics.create')}} ">Aggiungi fumetto</a>

    @foreach ($comics as $comic)
        <div style="border: 1px solid black">
            <h5>
                Titolo: {{$comic['title'] }}
            </h5>
            <p>
                {{$comic['description']}}
            </p>
            <h6>
                Prezzo: {{$comic['price']}} $
            </h6>
        </div>
    @endforeach
    @dump($comics)

    @dump($errors)

    @foreach ($comics_db as $comic)
    <div style="border: 1px solid black">
        <h5>
            Titolo: {{$comic['title'] }}
        </h5>
        <p>
            {{$comic['description']}}
        </p>
        <h6>
            Prezzo: {{$comic['price']}} $
        </h6>
    </div>
    @endforeach
</body>
</html>