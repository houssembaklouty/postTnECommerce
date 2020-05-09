<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Products
 * @package App\Models
 * @version May 9, 2020, 3:47 am UTC
 *
 * @property \App\Models\Category $category
 * @property string $name
 * @property string $reference
 * @property string $type
 * @property number $price
 * @property integer $stock
 * @property number $discount
 * @property string $description
 * @property integer $category_id
 * @property string $img
 */
class Products extends Model
{

    public $table = 'products';




    public $fillable = [
        'name',
        'reference',
        'type',
        'price',
        'stock',
        'discount',
        'description',
        'category_id',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'reference' => 'string',
        'type' => 'string',
        'price' => 'double',
        'stock' => 'integer',
        'discount' => 'float',
        'category_id' => 'integer',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'price' => 'required',
        'category_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function category()
    {
        return $this->hasOne(\App\Models\Categorys::class, 'id', 'category_id');
    }
}
