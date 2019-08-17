<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest; // includujemo ga
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //SELECT podataka iz baze (index.blade.php)
    public function index()
    {
        $articles = Article::all();
        //filteri
        $filtered = Article::where('vremePrikupljanja', '<', 2)
                                    ->orderBy('created_at')
                                    ->get();

        $filtered2 = Article::where('vremePrikupljanja', '>', 2)
                                    ->orderBy('naziv')
                                    ->get();

        return view('articles.index', ['articles' => $filtered],['articles2' => $filtered2]); //pravi varijablu na view-u da bi smo
    }
    //SELECT jedne kolone iz baze
    public function show($id)
    {
        $articles = Article::find($id);
        return view("articles.show", ['articles' => $articles]);
    }

    //INSERT podatka u bazu (create.blade.php) - Forma za insert podatka
    public function create()
    {
        return view('articles.create');
    }

    //Request koji se salje sa forme ka bazi
    public function store(ArticleStoreRequest $request)
    {
        Article::create([
            'naziv' => $request->naziv,
            'vremePrikupljanja' => $request->vremePrikupljanja,
            'sirina' => $request->sirina,
            'visina' => $request->visina,
            'status' => $request->status
        ]);


        return redirect('/articles'); // redirekcija na pocetnu
    }

    //UPDATE podataka u bazi (edit.blade.php) - funkcija koja trazi $id odredjenog uzorka i prosledjuje ga na formu
    public function edit($id)
    {
        $articles = Article::find($id); //metoda koja iz modela trazi $id parametar

        return view('articles.edit', ['articles' => $articles]);
    }

    public function update(Request $request, $id) //pravi request sa popunjenim podacima i prosledjuje ga u bazu odredjenom id-u
    {
        $articles = Article::find($id);
        $articles->update([
            'naziv' => $request->input('naziv'),
            'vremePrikupljanja' => $request->input('vremePrikupljanja'),
            'sirina' => $request->input('sirina'),
            'visina' => $request->input('visina'),
            'status' => $request->input('status'),
        ]);
        return redirect('/articles');
    }

    //DELETE podatka iz baze
    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return redirect('/articles');
    }
}
