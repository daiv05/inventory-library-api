<?php

namespace App\Models\Libros;

use App\Models\Catalogo\Estado;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'lib_generos';

    protected $fillable = [
        'nombre',
        'id_estado',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function detalleLibro()
    {
        return $this->hasMany(DetalleLibro::class, 'id_genero');
    }
}
