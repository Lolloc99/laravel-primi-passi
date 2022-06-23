<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ren</title>
</head>
<body>

    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Torna alla Home</a>
            </li>
            <li>
                <a href="{{ route('yu') }}">Yu Narukami</a>
            </li>
        </ul>
    </header>

    <h1>Hai scelto {{ $name }} {{ $lastname }}, ecco la lista delle sue Personae: </h1>
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