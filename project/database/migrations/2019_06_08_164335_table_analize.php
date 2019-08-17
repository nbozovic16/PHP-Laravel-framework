<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAnalize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_analize', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('analizirao');
            $table->string('rezultatAnalize');
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('table_articles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_analize');
    }
}
