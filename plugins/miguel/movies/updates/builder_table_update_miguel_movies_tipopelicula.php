<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMiguelMoviesTipopelicula extends Migration
{
    public function up()
    {
        Schema::rename('miguel_movies_tipo_pelicula', 'miguel_movies_tipopelicula');
    }
    
    public function down()
    {
        Schema::rename('miguel_movies_tipopelicula', 'miguel_movies_tipo_pelicula');
    }
}
