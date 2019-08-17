<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//model iz baze
class Article extends Model
{
    protected $table = 'table_articles';

    protected $fillable = ['naziv', 'vremePrikupljanja', 'sirina', 'visina', 'status' ];
}
