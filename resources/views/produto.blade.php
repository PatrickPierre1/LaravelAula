<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dados da API</h1>
    @if(!empty($data))
        <ul>
            @foreach($data as $item)
                <li>{{ $item['id'] }} - {{ $item['name'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Sem dados para mostrar.</p>
    @endif
</body>
</html>