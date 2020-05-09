<?php

namespace App\Repositories;

use App\Models\Categorys;
use App\Repositories\BaseRepository;

/**
 * Class CategorysRepository
 * @package App\Repositories
 * @version May 9, 2020, 3:39 am UTC
*/

class CategorysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'parent_id',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categorys::class;
    }
}
