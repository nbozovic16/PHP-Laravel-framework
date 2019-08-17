<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreatePage</title>
</head>
<style>
    .table-box-in{
        background: silver;
        border: 3px solid black ;

    }
    .table-box-out{
        display: inline-flex;
        padding-right:100px;

    }
    thead,tr,td{
        border-collapse: collapse;
        border: 1px solid black;
    }
    th {
        border-collapse: collapse;
        border: 1px solid black;
        background-color: whitesmoke;
    }
    .container-name div {
        display: inline-block;
    }
</style>
<body>
<h1>Analiziranje</h1>
<div class="container-name">
    <div class="div1">
        <div class="table-box-out">
            <div class="table-box-in">
                <table>
                    <thead>
                    <th>ID</th>
                    <th>Uzorak</th>
                    </thead>
                    @foreach($analize as $analiz)
                        <tr>
                            <td>{{$analiz->id}}</td>
                            <td>{{$analiz->naziv}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="div2">
        <form method="POST" action="/analize">
            @csrf

            <lable>Analizirao</lable>
            <input type="text" name="analizirao">
            <br>
            <!--dodela rand stanja nekom uzorku -->
            <?php
            $rezultatAnalize = (rand(1,3));
            ?>
            <input type="hidden" name="rezultatAnalize" value="
            <?php
            $input = array("Ima zivota", "Nema zivota", "Nije poznato","Ima zivota");
            $rand_keys = array_rand($input, 2);
            echo $input[$rand_keys[0]];
            ?>">
            <br>
            <lable>ID uzorka</lable>
            <input type="number" name="article_id">
            <br>
            <input type="submit">
        </form>
    </div>
</div>


</body>
</html>