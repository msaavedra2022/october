<?php namespace Miguel\Movies\Models;

use Model;

/**
 * Model
 */
class Peliculas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'miguel_movies_registro_peliculas';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array has one Tipo.
     */
    public $belongsTo = [
        'genre' => 'Author\Plugin\Models\Tipo'
    ];
}
