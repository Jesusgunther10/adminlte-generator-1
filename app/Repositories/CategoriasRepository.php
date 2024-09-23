<?php

namespace App\Repositories;

use App\Models\Categorias;
use App\Repositories\BaseRepository;

/**
 * Class CategoriasRepository
 * @package App\Repositories
 * @version September 22, 2024, 12:43 am UTC
*/

class CategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vehiculo',
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
        return Categorias::class;
    }
}
