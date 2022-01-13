<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Aggiorna dati fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf

        @method('PUT')

        <input type="text" name="title" id="title" placeholder="Titolo fumetto">
        <input type="description" name="description" id="description" placeholder="Descrizione fumetto">
        <input type="number" name="price" id="price" placeholder="Prezzo fumetto">
        <button type="submit">Salva modifiche</button>
    </form>
</body>
</html>