<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>lista dei treni:</h1>
    
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>Azienda: <strong>{{ $train['azienda'] }}</strong></p> 
                <p>Stazione di partenza: <strong>{{ $train['stazione_partenza'] }}</strong></p>
                <p>Stazione di arrivo: <strong>{{ $train['stazione_arrivo'] }}</strong></p>
                <p>Partenza: <strong>{{ $train['data_partenza'] }}, </strong><strong>{{ $train['orario_partenza'] }}</strong></p>
                <p>Arrivo: <strong>{{ $train['data_arrivo'] }}, </strong><strong>{{ $train['orario_arrivo'] }}</strong></p>
            </li>
        @endforeach
    </ul>

</body>
</html>