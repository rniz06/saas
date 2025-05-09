<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Estado extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'estadoables';
    protected $primaryKey = 'id_estado';
    protected $fillable = ['estado', 'estadoable_id', 'estadoable_type', 'creado_por', 'actualizado_por'];
}
