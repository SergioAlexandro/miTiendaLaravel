<?php

namespace miTienda;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = ['nombre'];

    /*
    public function productoPresentacion(){
        return $this->hasMany(ProductoPresentacion::class);
    }
    */

}
