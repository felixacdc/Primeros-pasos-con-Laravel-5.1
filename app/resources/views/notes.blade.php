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
</body>
</html>
