
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .table-box-in, .table-box-in2{
            background: silver;
            border: 3px solid black ;

        }
        .table-box-out, .table-box-out2{
            display: inline-flex;
            width: 70%;
            padding-right:440px;

        }
        .header{
            padding-top: 10px;
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
        .space-box{
            padding-top: 20px;
        }
    </style>
    <title>IndexPage</title>
</head>
<body>
<div class="header">
    <h1>Tabele sa uzorcima</h1>
    <a href="/articles/create ">Dodaj novi uzorak</a><br>
    <a href="/analize">Analize</a>
    <hr/>
</div>
<br/>
    <div class="table-all">
        <br>
        <h2>Tabela sa uzorcima sortiranim po vremenu kreiranja:</h2>
            <div class="table-box-out">
                <div class="table-box-in">
                    <table>
                        <thead>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Vreme prikupljanja</th>
                        <th>Sirina</th>
                        <th>Visina</th>
                        <th>Status</th>
                        <th>Kreirano</th>
                        <th>Azurirano</th>
                        <th>Opcije</th>
                        </thead>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->naziv}}</td>
                                <td>{{$article->vremePrikupljanja}}</td>
                                <td>{{$article->sirina}}</td>
                                <td>{{$article->visina}}</td>
                                <td>{{$article->status}}</td>
                                <td>{{$article->created_at}}</td>
                                <td>{{$article->updated_at}}</td>
                                <td>
                                    <a href="/articles/show/{{$article->id}} ">Prikaz</a>
                                    <a href="/articles/edit/{{$article->id}}  ">Modifikuj</a>
                                    <a href="/articles/delete/{{$article->id}}  ">Obrisi</a>
                                </td>
                            </tr>
                        @endforeach
                     </table>
                </div>
            </div>
            <div class="space-box"></div>
            <br>
            <h2>Tabela sa uzorcima sortiranim po nazivu:</h2>
            <div class="table-box-out2">
                <div class="table-box-in2">
                    <table>
                        <thead>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Vreme prikupljanja</th>
                        <th>Sirina</th>
                        <th>Visina</th>
                        <th>Status</th>
                        <th>Kreirano</th>
                        <th>Azurirano</th>
                        <th>Opcije</th>
                        </thead>
                        @foreach($articles2 as $article2)
                            <tr>
                                <td>{{$article2->id}}</td>
                                <td>{{$article2->naziv}}</td>
                                <td>{{$article2->vremePrikupljanja}}</td>
                                <td>{{$article2->sirina}}</td>
                                <td>{{$article2->visina}}</td>
                                <td>{{$article2->status}}</td>
                                <td>{{$article2->created_at}}</td>
                                <td>{{$article2->updated_at}}</td>
                                <td>
                                    <a href="/articles/show/{{$article2->id}} ">Prikaz</a>
                                    <a href="/articles/edit/{{$article2->id}}  ">Modifikuj</a>
                                    <a href="/articles/delete/{{$article2->id}}  ">Obrisi</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>

</body>
</html>

