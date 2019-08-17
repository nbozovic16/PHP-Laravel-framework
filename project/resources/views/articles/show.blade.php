<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowPage</title>
</head>
<body>
    <b>ID:</b>&nbsp;{{$articles->id}}<br>
    <b>Naziv:</b>&nbsp;{{$articles->naziv}}<br>
    <b>Vreme prikupljanja:</b>&nbsp;{{$articles->vremePrikupljanja}}<br>
    <b>Sirina:</b>&nbsp;{{$articles->sirina}}<br>
    <b>Visina:</b>&nbsp;{{$articles->visina}}<br>
    <b>Status:</b>&nbsp;{{$articles->status}}<br>
    <b>Kreirano:</b>&nbsp;{{$articles->created_at}}<br>
    <b>Azurirano:</b>&nbsp;{{$articles->updated_at}}<br>
</body>
</html>
