@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Productos')
@section('content_header_title', 'Productos')
@section('content_header_subtitle', 'Listar')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Mostrar un alert en caso de haber algun mensaje --}}
    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    @livewire('producto.tabla')
@stop

{{-- Push extra CSS --}}

@push('css')
@endpush

{{-- Push extra scripts --}}

@push('js')
@endpush
