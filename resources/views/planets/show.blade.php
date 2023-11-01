<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet show</title>
</head>

<body>
    <h1>惑星詳細</h1>
    <h1>
        {{ $planet->name }}
        ({{ $planet->english_name }})
    </h1>
    <h2>半径</h2><br>
    <h2>{{ $planet->radius }}</h2>
    <h2>重量</h2><br>
    <h2>{{ $planet->weight }}</h2>


</body>

</html>
