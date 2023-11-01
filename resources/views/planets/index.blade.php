<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planets index</title>
</head>

<body>
    <h1>惑星一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前（英語）</th>
            <th>半径</th>
            <th>重量</th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->jap_name }}</td>
                <td>{{ $planet->eng_name }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('planets.create') }}">新規登録</a>
</body>

</html>
