@extends('adminlte::page')

{{-- Extend and customize the browser title --}}

@section('title')
    {{ tenant('nombre_empresa') ?? config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}

@section('content')
    @yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>

    <strong>
        <a class="text-dark" href="https://{{ tenant('sitio_web') ?? 'https://marka.com.py' }}">
            {{ tenant('nombre_empresa') ?? 'Saas | MarKa' }}
        </a>
    </strong>
@stop

{{-- Add common Javascript/Jquery code --}}

@push('js')

@endpush

{{-- Add common CSS customizations --}}

@push('css')

@endpush