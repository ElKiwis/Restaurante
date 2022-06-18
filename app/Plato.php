<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plato
 *
 * @property $id
 * @property $nombre_p
 * @property $precio
 * @property $stock
 * @property $descripcion
 * @property $comentario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plato extends Model
{
    
    static $rules = [
		'nombre_p' => 'required',
		'precio' => 'required',
		'stock' => 'required',
		'descripcion' => 'required',
		'comentario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_p','precio','stock','descripcion','comentario'];



}
