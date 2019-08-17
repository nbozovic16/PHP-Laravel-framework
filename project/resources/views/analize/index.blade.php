<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analiziranje</title>
</head>
<style>
    .table-box-in{
        background: silver;
        border: 3px solid black ;

    }
    .table-box-out{
        display: inline-flex;
        width: 70%;
        padding-right:440px;

    }
    thead,tr,td{
        border-collapse: collapse;
        border: 1px solid black;
    }
    th{
        border-collapse: collapse;
        border: 1px solid black;
        background-color: whitesmoke;
    }
    .header{
        padding-top: 50px;
    }
</style>
<body>
<div class="header">
    <h1>Tabele sa analizama</h1>
    <a href="/analize/create ">Dodaj novu analizu</a>
    <hr/>
</div>
<br/>
<div class="table-all">
    <div class="table-box-out">
        <div class="table-box-in">
            <table>
                <thead>
                <th>No</th>
                <th>Uzorak</th>
                <th>Razultat analize</th>
                <th>Analizu izvrsio</th>
                <th>Opcije</th>
                </thead>
                @foreach($analize as $analiz)
                    <tr>
                        <td>{{$analiz->id}}</td>
                        <td>{{$analiz->naziv}}</td>
                        <td>{{$analiz->rezultatAnalize}}</td>
                        <td>{{$analiz->analizirao}}</td>
                        <td>
                            <a href="/analize/show/{{$analiz->id}} ">Prikaz</a>
                            <a href="/analize/edit/{{$analiz->id}}  ">Modifikuj</a>
                            <a href="/analize/delete/{{$analiz->id}}  ">Obrisi</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<br>
<hr>
<a href="/articles">Vrati se na tabelu sa uzorcima</a>

</body>
</html>
