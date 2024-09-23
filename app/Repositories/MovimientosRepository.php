<?php

namespace App\Repositories;

use App\Models\Movimientos;
use App\Repositories\BaseRepository;

/**
 * Class MovimientosRepository
 * @package App\Repositories
 * @version September 22, 2024, 12:45 am UTC
*/

class MovimientosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'hora_entrada',
        'hora_salida'
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
        return Movimientos::class;
    }
}
