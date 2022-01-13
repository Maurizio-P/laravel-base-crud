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
    <h5>{{$comic['title']}}</h5>
    <p>
            {{$comic['description']}}
    </p>
        <h6>
            Prezzo: {{$comic['price']}} $
        </h6>

        <a href="{{route('comics.edit', $comic->id)}} ">Modifica fumetto</a>

        
        <a href="{{route('comics.index')}} ">torna alla home</a>
        
        <div style="margin-top: 15px">

            <form action="{{ route('comics.destroy', $comic->id) }}" method="post"
                class="form-delete">
                @csrf
                @method('delete')
                
                <button type="submit"
                class="nav-link active btn btn-link text-danger">Elimina fumetto</button>
            </form>
        </div>
    @dump($comic)
</body>
</html>