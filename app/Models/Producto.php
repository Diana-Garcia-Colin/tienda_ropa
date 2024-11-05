<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_ropa',
        'precio',
        'id_marca',
        'id_categoria',
        'imagen',
    ];

    public function tipo_Ropa()
    {
        return $this->belongsTo(Tipo_ropa::class, 'id_tipo_ropa');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
