<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditPage</title>
</head>
<body>
<h1>Izmena uzoraka</h1>
<br>
<form method="POST" action="/analize/{{ $analize->id }}">
    @csrf
    @method('PUT')

    <lable>Analizirao :</lable>
    <input type="text" name="analizirao" value="{{$analize->analizirao}}"><br>
    <input type="submit">
</form>
</body>
</html>
