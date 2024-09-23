<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tarifas
 * @package App\Models
 * @version September 22, 2024, 12:46 am UTC
 *
 * @property string $descripcion
 * @property string $estado
 * @property string $monto
 */
class Tarifas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tarifas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'estado',
        'monto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'estado' => 'string',
        'monto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'estado' => 'required',
        'monto' => 'required'
    ];

    
}
