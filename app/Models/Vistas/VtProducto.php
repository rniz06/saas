<?php

namespace App\Models\Vistas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VtProducto extends Model
{
    use SoftDeletes;

    protected $table = "vt_productos";

    protected $primaryKey = 'id_producto';

    /**
     * Se implementa funcion para buscador general.
     */
    public function scopeBuscar($query, $value)
    {
        $query->where('nombre', 'like', "%{$value}%")
        ->orWhere('descripcion', 'like', "%{$value}%")
        ->orWhere('precio', 'like', "%{$value}%")
        ->orWhere('cantidad', 'like', "%{$value}%")
        ->orWhere('cantidad_minima', 'like', "%{$value}%")
        ->orWhere('categoria_id', 'like', "%{$value}%")
        ->orWhere('categoria', 'like', "%{$value}%")
        ->orWhere('estado_id', 'like', "%{$value}%")
        ->orWhere('estado', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo nombre.
     */
    public function scopeBuscarNombre($query, $value)
    {
        $query->where('nombre', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo descripcion.
     */
    public function scopeBuscarDescripcion($query, $value)
    {
        $query->where('descripcion', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo precio.
     */
    public function scopeBuscarPrecio($query, $value)
    {
        $query->where('precio', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo cantidad.
     */
    public function scopeBuscarCantidad($query, $value)
    {
        $query->where('cantidad', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo cantidad_minima.
     */
    public function scopeBuscarCantidadMinima($query, $value)
    {
        $query->where('cantidad_minima', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo categoria_id.
     */
    public function scopeBuscarCategoriaId($query, $value)
    {
        $query->where('categoria_id', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo categoria.
     */
    public function scopeBuscarCategoria($query, $value)
    {
        $query->where('categoria', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo estado_id.
     */
    public function scopeBuscarEstadoId($query, $value)
    {
        $query->where('estado_id', 'like', "%{$value}%");
    }

    /**
     * Se implementa funcion para buscador del campo estado.
     */
    public function scopeBuscarEstado($query, $value)
    {
        $query->where('estado', 'like', "%{$value}%");
    }

}
