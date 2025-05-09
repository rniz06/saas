<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Imagen extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'imagenables';
    protected $primaryKey = 'id_imagen';
    protected $fillable = ['nombre', 'ruta', 'tipo', 'disco', 'tamanho', 'uuid', 'imagenable_id', 'imagenable_type', 'creado_por', 'actualizado_por'];
}
