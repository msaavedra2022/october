<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMiguelMoviesRegistroPeliculas6 extends Migration
{
    public function up()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('miguel_movies_registro_peliculas', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
