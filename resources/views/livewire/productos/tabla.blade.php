<div class="card">
    <div class="card-header">
        <h3 class="card-title">Listado de Productos @can('Personal Exportar Excel')
                <a href="{{ route('personal.exportar') }}" class="btn btn-sm btn-secondary"><i class="fas fa-file-export"></i>
                    Exportar</a>
            @endcan
            {{-- @can('Personal Crear') --}}
                <a href="{{ route('productos.create') }}" class="btn btn-sm btn-success">Registrar Producto</a>
            {{-- @endcan --}}
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px"></th>
                    <th>Nombre: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarNombre"></th>
                    <th>Descripción: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarDescripcion"></th>
                    <th>Precio: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarPrecio"></th>
                    <th>Cantidad: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarCantidad"></th>
                    <th>C. Minima: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarCantidadMinima"></th>
                    <th>Categoria: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarCategoria"></th>
                    <th>Estado: <br> <input class="form-control form-control-sm" type="text" placeholder=""
                            wire:model.live="buscarEstado"></th>                    
                    <th></th>
                </tr>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre:</th>
                    <th>Descripción</th>
                    <th>Precio:</th>
                    <th>Cantidad:</th>
                    <th>C. Minima:</th>
                    <th>Categoria:</th>
                    <th>Estado:</th>
                    <th style="width: 40px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr>
                        <td>#</td>
                        <td>{{ $producto->nombre ?? 'N/A' }}</td>
                        <td>{{ $producto->descripcion ?? 'N/A' }}</td>
                        <td>{{ $producto->precio ?? 'N/A' }}</td>
                        <td>{{ $producto->cantidad ?? 'N/A' }}</td>
                        <td>{{ $producto->cantidad_minima ?? 'N/A' }}</td>
                        <td>{{ $producto->categoria ?? 'N/A' }}</td>
                        <td>{{ $producto->estado ?? 'N/A' }}</td>
                        <td>
                            {{-- <x-dropdown>
                                @if (auth()->user()->can('Personal Ver'))
                                    <x-slot name="show">{{ route('personal.show', $personal->idpersonal) }}</x-slot>
                                @endif

                                @if (auth()->user()->can('Personal Generar Ficha'))
                                    <x-slot
                                        name="ficha">{{ route('personal.fichapdf', $personal->idpersonal) }}</x-slot>
                                @endif

                                @if (auth()->user()->can('Personal Editar'))
                                    <x-slot name="edit">{{ route('personal.edit', $personal->idpersonal) }}</x-slot>
                                @endif

                                @if (auth()->user()->can('Personal Eliminar'))
                                    <x-slot name="action">#</x-slot>
                                @endif
                            </x-dropdown> --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center font-italic">Sin Registros coincidentes...</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix col-12">
        <center><select class="col-1 form-control form-contro-sm" wire:model.live="paginado">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select></center>
        {{ $productos->links() }}
    </div>
</div>
