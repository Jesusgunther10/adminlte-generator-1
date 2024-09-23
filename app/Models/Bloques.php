<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bloques
 * @package App\Models
 * @version September 22, 2024, 12:44 am UTC
 *
 * @property string $descripcion
 * @property string $estado
 */
class Bloques extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bloques';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'estado' => 'required'
    ];

    
}
