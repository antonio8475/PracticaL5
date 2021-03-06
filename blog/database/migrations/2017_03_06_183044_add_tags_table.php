<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });

        //Relacion de Muchos a Muchos, se crea una tabla pivote con sus respectivas relaciones foraneas
        schema::create('article_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articles_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('articles_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('tags');
    }
}
