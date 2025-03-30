<?php

namespace App\Models\Producto;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Estado extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    
    protected $primaryKey = 'idproducto_estado';
    
    protected $table = 'producto_estados';

    protected $fillable = [
        'estado',
    ];

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class);
    }
}
