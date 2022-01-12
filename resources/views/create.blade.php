<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Pagina Create</h1>

    {{-- @if ($errors->any())
        <div style="border: 1px solid red">
            Attenzione, dati errati nel form
        </div>
    @endif --}}

    <form action="{{ route("comics.store") }}" method="post">
        @csrf

        <input type="text" name="title" id="title" placeholder="Titolo fumetto">
        <input type="description" name="description" id="description" placeholder="Descrizione fumetto">
        <input type="number" name="price" id="price" placeholder="Prezzo fumetto">
        <button type="submit">Aggiungi fumetto</button>
    </form>
</body>
</html>