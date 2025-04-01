@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Productos')
@section('content_header_title', 'Productos')
@section('content_header_subtitle', 'Listar')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Tabla Con listado de productos.</p>
@stop

{{-- Push extra CSS --}}

@push('css')
    
@endpush

{{-- Push extra scripts --}}

@push('js')
    
@endpush