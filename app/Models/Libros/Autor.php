<?php

namespace App\Models\Libros;

use App\Models\Catalogo\Estado;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'lib_autores';

    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'descripcion',
        'id_estado',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function detallesLibros()
    {
        return $this->hasMany(DetalleLibro::class, 'id_autor');
    }
}
