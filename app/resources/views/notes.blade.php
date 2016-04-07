<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
</head>
<body>
    <h2>Notes</h2>
    <ul>
        @foreach($notes as $note)
            <li>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>

    <form class="" method="post">

        {{-- csrf_field() equivale a generar un campo oculto para el token --}}
        {!! csrf_field() !!}
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <textarea name="name" rows="8" cols="40"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
