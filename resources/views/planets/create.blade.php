<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>
    <form action="{{ route('planets.store') }}" method="post">
        @csrf
        <p>
            <label for="jap_name">名前</label>
            <input type="text", name="jap_name", id="jap_name">
        </p>
        <p>
            <label for="eng_name">名前（英語）</label>
            <input type="text" name="eng_name" id="eng_name">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="text" name="weight" id="weight">
        </p>
        <input type="submit" value="登録">
    </form>
</body>

</html>
