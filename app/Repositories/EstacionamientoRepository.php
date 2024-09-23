<?php

namespace App\Repositories;

use App\Models\Estacionamiento;
use App\Repositories\BaseRepository;

/**
 * Class EstacionamientoRepository
 * @package App\Repositories
 * @version September 22, 2024, 12:48 am UTC
*/

class EstacionamientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'id_bloque',
        'id_categoria',
        'estado',
        'id_tarifas',
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
        return Estacionamiento::class;
    }
}
