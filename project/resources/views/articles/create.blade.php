<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreatePage</title>
</head>
<body>
    <h1>Unesti novi uzorak</h1>
    <br>
    <form method="POST" action="/articles">
        @csrf

        <lable>Naizv</lable>
        <input type="text" name="naziv" value="{{ old('naziv') }}">
        @error('naziv')
            <span style="color: red">{{@Polje_je_obavezno_min_3_karaktera_max_100_karaktera}}</span>
        @enderror
        <br>
        <lable>Vreme prikupljanja</lable>
        <input type="number" name="vremePrikupljanja">
        @error('vremePrikupljanja')
        <span style="color: red">{{@Polje_je_obavezno_numericki_karakteri_minimum_1}}</span>
        @enderror
        <br>

        <lable>Sirina</lable>
        <input type="number" name="sirina">
        @error('sirina')
        <span style="color: red">{{@Polje_je_obavezno_numericki_karakteri}}</span>
        @enderror
        <br>

        <lable>Visina</lable>
        <input type="number" name="visina">
        @error('visina')
        <span style="color: red">{{@Polje_je_obavezno_numericki_karakteri}}</span>
        @enderror
        <br>

        <lable>Status</lable>
        <select name="status" id="status">
            <option value="Na Marsu">Na Marsu</option>
            <option value="Na Zemlji">Na Zemlji</option>
            <option value="U Transportu">U Transportu</option>
        </select><br>

        <input type="submit">
        <br>
        <br>
        <a href="/articles ">Vrati se nazad</a>

    </form>
</body>
</html>