<?php

namespace App\Repositories;

use App\Models\Tarifas;
use App\Repositories\BaseRepository;

/**
 * Class TarifasRepository
 * @package App\Repositories
 * @version September 22, 2024, 12:46 am UTC
*/

class TarifasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'estado',
        'monto'
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
        return Tarifas::class;
    }
}
