<?php

namespace App\Models\Productos;

use App\Models\Catalogo\Estado;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'prd_categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_estado',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
