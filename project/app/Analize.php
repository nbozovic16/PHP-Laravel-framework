<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analize extends Model
{
    protected $table = 'table_analize';

    protected $fillable = ['analizirao', 'rezultatAnalize', 'article_id' ];
}
