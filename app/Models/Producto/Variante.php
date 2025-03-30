<?php

namespace App\Models\Producto;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Variante extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    
    protected $primaryKey = 'idproducto_variante';
    
    protected $table = 'productos_variantes';

    protected $fillable = [
        'producto_id',
        'atributo_id',
        'variante',
        'precio_adicional',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function atributo()
    {
        return $this->belongsTo(Atributo::class, 'atributo_id');
    }
}
