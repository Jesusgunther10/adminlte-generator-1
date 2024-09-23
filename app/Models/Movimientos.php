<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Movimientos
 * @package App\Models
 * @version September 22, 2024, 12:45 am UTC
 *
 * @property string $descripcion
 * @property string $hora_entrada
 * @property string $hora_salida
 */
class Movimientos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'movimientos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
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
        'hora_entrada' => 'required',
        'hora_salida' => 'required'
    ];

    
}
