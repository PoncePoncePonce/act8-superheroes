<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hero
 *
 * @property $id
 * @property $real_name
 * @property $hero_name
 * @property $image
 * @property $info
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hero extends Model
{
    
    static $rules = [
		'real_name' => 'required',
		'hero_name' => 'required',
		'image' => 'required',
		'info' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['real_name','hero_name','image','info'];
    public $timestamps = false;

}
