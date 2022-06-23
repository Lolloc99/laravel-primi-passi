<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Ciao {{ $name }} {{ $lastname }}, ecco la lista delle tue Personae: </h1>
    {{-- Stampare la lista di Personae --}}
    <ul>
        @foreach ($personae as $persona)
            <li>
                <h1>{{ $persona['name'] }}</h1>
                <h2>Elemento principale: {{ $persona['element'] }}</h2>
                <h3>Resistenze: {{ $persona['resistance'] }} </h3>
                <h3>Debolezze: {{ $persona['weakness'] }} </h3>
            </li>
        @endforeach
    </ul>
    
</body>
</html>