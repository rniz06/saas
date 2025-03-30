<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Imagen extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    
    protected $primaryKey = 'id_imagen';
    
    protected $table = 'imagenes';

    protected $fillable = [
        'nombre',
        'ruta',
        'tipo',
        'disco',
        'tamanho',
        'uuid',
        'imagenable_id',
        'imagenable_type',
    ];
    
    /**
     * Relación Polimorfica.
     */
    public function imagenable(): MorphTo
    {
        return $this->morphTo();
    }
}
