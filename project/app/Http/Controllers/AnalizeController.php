<?php

namespace App\Http\Controllers;

use App\Analize;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalizeController extends Controller
{
    //SELECT podataka iz baze (index.blade.php)
    public function index()
    {
        $analize = DB::table('table_articles')
            ->join('table_analize', 'table_articles.id', '=', 'table_analize.article_id')
            ->select('table_articles.naziv', 'table_analize.*')
            ->get();

        return view('analize.index', ['analize' => $analize]);
    }

    public function show($id)
    {
        $analize = Analize::find($id);
        return view("analize.show", ['analize' => $analize]);
    }

    //INSERT podatka u bazu (create.blade.php) - Forma za insert podatka
    public function create()
    {
        $analize = DB::table('table_articles')
            ->join('table_analize', 'table_articles.id', '=', 'table_analize.article_id')
            ->select('table_articles.naziv', 'table_articles.id')
            ->get();

        return view('analize.create', ['analize' => $analize]);
    }


    //Request koji se salje sa forme ka bazi
    public function store(Request $request)
    {
        Analize::create([
            'analizirao' => $request->analizirao,
            'rezultatAnalize' => $request->rezultatAnalize,
            'article_id' => $request->article_id,
        ]);


        return redirect('/analize'); // redirekcija na pocetnu
    }

    //UPDATE podataka u bazi (edit.blade.php) - funkcija koja trazi $id odredjenog uzorka i prosledjuje ga na formu
    public function edit($id)
    {
        $analize = Analize::find($id); //metoda koja iz modela trazi $id parametar

        return view('analize.edit', ['analize' => $analize]);
    }

    public function update(Request $request, $id) //pravi request sa popunjenim podacima i prosledjuje ga u bazu odredjenom id-u
    {
        $analize = Analize::find($id);
        $analize->update([
            'analizirao' => $request->input('analizirao'),

        ]);
        return redirect('/analize');
    }

    //DELETE podatka iz baze
    public function destroy($id)
    {
        $analize = Analize::find($id);
        $analize->delete();
        return redirect('/analize');
    }
}
