<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_articles', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('naziv');
            $table->integer('vremePrikupljanja');
            $table->double('sirina');
            $table->double('visina');
            $table->string('status');
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
        Schema::dropIfExists('table_articles');
    }
}
