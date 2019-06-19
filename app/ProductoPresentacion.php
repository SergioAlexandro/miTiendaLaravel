<?php

namespace miTienda;

use Illuminate\Database\Eloquent\Model;

class ProductoPresentacion extends Model
{
    protected $table = 'productoPresentacion';

    /*
    public function producto(){
        return $this->belongsToMany(Producto::class);
    }

    public function presentacion(){
        return $this->belongsToMany(Presentacion::class);
    }
    */
}
