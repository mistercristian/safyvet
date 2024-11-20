<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'producto_id',
        'cantidad',
        'total',
    ];

    public function usuario()
{
    return $this->belongsTo(User::class, 'usuario_id');
}

public function producto()
{
    return $this->belongsTo(Producto::class, 'producto_id');
}

}
