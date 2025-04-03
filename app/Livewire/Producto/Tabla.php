<?php

namespace App\Livewire\Producto;

use App\Models\Vistas\VtProducto;
use Livewire\Component;
use Livewire\WithPagination;

class Tabla extends Component
{
    // Importa el trait WithPagination para manejar la paginación de datos
    use WithPagination;

    

    // ===========================
    // Propiedades para búsqueda y filtrado en tiempo real
    // ===========================

    //public $buscarNombrecompleto = ''; // Almacena el criterio de búsqueda por nombre completo
    public $buscarNombre = '';
    public $buscarDescripcion = '';
    public $buscarPrecio = '';
    public $buscarCantidad = '';
    public $buscarCantidadMinima = '';
    public $buscarCategoria = '';
    public $buscarEstado = '';
    public $paginado = 5;

    /**
     * Método que se ejecuta al actualizar una de las propiedades de búsqueda o paginación.
     * Si se detecta un cambio en alguna de estas propiedades, se resetea la paginación
     * para evitar inconsistencias en los resultados mostrados.
     */
    public function updating($key): void
    {
        if ($key === 'buscarNombre' || $key === 'buscarDescripcion' || $key === 'buscarPrecio' || $key === 'buscarCantidad' || $key === 'buscarCantidadMinima' || $key === 'buscarCategoria' || $key === 'buscarEstado' || $key === 'paginado') {
            $this->resetPage();
        }
    }

    public function render()
    {
        $productos = VtProducto::select('id_producto', 'nombre', 'descripcion', 'precio', 'cantidad', 'cantidad_minima', 'categoria_id', 'categoria', 'estado_id', 'estado')
            ->buscarNombre($this->buscarNombre)
            ->buscarDescripcion($this->buscarDescripcion)
            ->buscarPrecio($this->buscarPrecio)
            ->buscarCantidad($this->buscarCantidad)
            ->buscarCantidadMinima($this->buscarCantidadMinima)
            ->buscarCategoria($this->buscarCategoria)
            ->buscarEstado($this->buscarEstado)
            ->paginate($this->paginado);
        return view('livewire.productos.tabla', compact('productos'));
    }
}
