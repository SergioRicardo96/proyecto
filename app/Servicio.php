<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
	use SoftDeletes;

    protected $fillable = ['nombre','costo','mora','horario','imagen1','imagen2','imagen3','activo'];
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    protected $dates = ['deleted_at'];
}
