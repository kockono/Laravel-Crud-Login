<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $fecha_de_nacimiento
 * @property $sexo
 * @property $estado
 * @property $calle
 * @property $numero_de_casa
 * @property $numero_interior
 * @property $colonia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido_paterno' => 'required',
		'apellido_materno' => 'required',
		'fecha_de_nacimiento' => 'required',
		'sexo' => 'required',
		'estado' => 'required',
		'calle' => 'required',
		'numero_de_casa' => 'required',
		'numero_interior' => '',
		'colonia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_de_nacimiento','sexo','estado','calle','numero_de_casa','numero_interior','colonia'];



}
