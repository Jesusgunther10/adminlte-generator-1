<?php

namespace App\Repositories;

use App\Models\Bloques;
use App\Repositories\BaseRepository;

/**
 * Class BloquesRepository
 * @package App\Repositories
 * @version September 22, 2024, 12:44 am UTC
*/

class BloquesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'estado'
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
        return Bloques::class;
    }
}
