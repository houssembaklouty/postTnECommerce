<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorys
 * @package App\Models
 * @version May 9, 2020, 3:39 am UTC
 *
 * @property string $name
 * @property integer $parent_id
 * @property string $description
 */
class Categorys extends Model
{

    public $table = 'categorys';
    



    public $fillable = [
        'name',
        'parent_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
