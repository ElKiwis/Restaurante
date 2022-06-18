<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $email
 * @property $telefono
 * @property $fecha_naci
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'fecha_naci' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','email','telefono','fecha_naci'];



}
