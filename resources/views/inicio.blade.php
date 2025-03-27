@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Bienvenido al panel de administración.</p>
    {{ $usuario }}
@stop

{{-- Push extra CSS --}}

@push('css')
    
@endpush

{{-- Push extra scripts --}}

@push('js')
    
@endpush