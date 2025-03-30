<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Atributo extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    
    protected $primaryKey = 'idproducto_atributo';
    
    protected $table = 'productos_atributos';

    protected $fillable = [
        'atributo',
    ];

    public function variantes(): HasMany
    {
        return $this->hasMany(Variante::class);
    }
}
