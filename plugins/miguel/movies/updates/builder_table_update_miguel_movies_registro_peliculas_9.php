<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMiguelMoviesRegistroPeliculas9 extends Migration
{
    public function up()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->integer('type_id')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->integer('type_id')->default(null)->change();
        });
    }
}
