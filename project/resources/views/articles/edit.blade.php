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
<form method="POST" action="/articles/{{ $articles->id }}">
    @csrf
    @method('PUT')

    <lable>Naizv</lable>
    <input type="text" name="naziv" value="{{$articles->naziv}}"><br>

    <lable>Vreme prikupljanja</lable>
    <input type="text" name="vremePrikupljanja" value="{{$articles->vremePrikupljanja}}"><br>

    <lable>Sirina</lable>
    <input type="text" name="sirina" value="{{$articles->sirina}}"><br>

    <lable>Visina</lable>
    <input type="text" name="visina" value="{{$articles->visina}}"><br>

    <lable>Status</lable>
    <select name="status" value="{{$articles->status}}">
        <option value="Na Marsu">Na Marsu</option>
        <option value="Na Zemlji">Na Zemlji</option>
        <option value="U Transportu">U Transportu</option>
    </select><br>

    <input type="submit">

</form>
</body>
</html>
