<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMiguelMoviesTipopelicula extends Migration
{
    public function up()
    {
        Schema::dropIfExists('miguel_movies_tipopelicula');
    }
    
    public function down()
    {
        Schema::create('miguel_movies_tipopelicula', function($table)
        {
            $table->integer('id')->unsigned();
            $table->string('name', 255);
            $table->primary(['id']);
        });
    }
}
