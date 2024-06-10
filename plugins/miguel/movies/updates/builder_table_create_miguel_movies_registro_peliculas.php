<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMiguelMoviesRegistroPeliculas extends Migration
{
    public function up()
    {
        Schema::create('miguel_movies_registro_peliculas', function($table)
        {
            $table->integer('id');
            $table->string('name');
            $table->string('url');
            $table->date('fecha');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('miguel_movies_registro_peliculas');
    }
}
