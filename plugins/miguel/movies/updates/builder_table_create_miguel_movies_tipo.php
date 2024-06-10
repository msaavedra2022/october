<?php namespace Miguel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMiguelMoviesTipo extends Migration
{
    public function up()
    {
        Schema::create('miguel_movies_tipo', function($table)
        {
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('miguel_movies_tipo');
    }
}
