<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table = 'destalle_ingresos';
    protected $fillable = [
        'idingreso',
        'idarticulo',
        'cantidad',
        'precio'
    ];
    public $timestamps = false;
    
}
