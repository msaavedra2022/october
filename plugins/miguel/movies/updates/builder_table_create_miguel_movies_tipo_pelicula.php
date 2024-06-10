<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMiguelMoviesTipoPelicula extends Migration
{
    public function up()
    {
        Schema::create('miguel_movies_tipo_pelicula', function($table)
        {
            $table->integer('id')->unsigned();
            $table->string('name');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('miguel_movies_tipo_pelicula');
    }
}
