<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = 'prd_detalles_productos';

    protected $fillable = [
        'id_producto',
        'codigo_producto',
        'color',
        'dimensiones',
        'peso',
        'material',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

}
