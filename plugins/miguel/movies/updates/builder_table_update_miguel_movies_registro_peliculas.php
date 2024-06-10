<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMiguelMoviesRegistroPeliculas extends Migration
{
    public function up()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->dropColumn('fecha');
        });
    }
    
    public function down()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->date('fecha');
        });
    }
}
