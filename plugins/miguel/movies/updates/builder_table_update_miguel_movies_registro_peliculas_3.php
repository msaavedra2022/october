<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMiguelMoviesRegistroPeliculas3 extends Migration
{
    public function up()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
