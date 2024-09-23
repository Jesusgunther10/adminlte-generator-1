<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Estacionamiento
 * @package App\Models
 * @version September 22, 2024, 12:48 am UTC
 *
 * @property string $descripcion
 * @property string $id_bloque
 * @property string $id_categoria
 * @property string $estado
 * @property string $id_tarifas
 * @property string $hora_entrada
 * @property string $hora_salida
 */
class Estacionamiento extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'estacionamientos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'id_bloque',
        'id_categoria',
        'estado',
        'id_tarifas',
        'hora_entrada',
        'hora_salida'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'id_bloque' => 'string',
        'id_categoria' => 'string',
        'estado' => 'string',
        'id_tarifas' => 'string',
        'hora_entrada' => 'string',
        'hora_salida' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'id_bloque' => 'required',
        'id_categoria' => 'required',
        'estado' => 'required',
        'id_tarifas' => 'required',
        'hora_entrada' => 'required',
        'hora_salida' => 'required'
    ];

    
}
