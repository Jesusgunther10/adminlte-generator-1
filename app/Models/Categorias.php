<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categorias
 * @package App\Models
 * @version September 22, 2024, 12:43 am UTC
 *
 * @property string $vehiculo
 * @property string $descripcion
 * @property string $estado
 */
class Categorias extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'vehiculo',
        'descripcion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vehiculo' => 'string',
        'descripcion' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vehiculo' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ];

    
}
