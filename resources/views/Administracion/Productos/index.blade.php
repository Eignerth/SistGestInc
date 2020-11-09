@extends('layouts.app')
@section('tittle','| Productos - Servicios')
@section('tittlePage')
    <h1 class="m-0 text-dark">Productos - Servicios</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">Administración</a></li>
        <li class="breadcrumb-item active">Productos y Servicios</li>
    </ol>
@endsection
@section('content')    
    <div class="card card-outline card-teal">
        <div class="card-body">
            {{--Componente Producto-Servicio--}}
            @livewire('administration.product-component')
        </div>
    </div>
    
@endsection
@section('js')
    <script>
        window.addEventListener('swal',function(e){ 
            Swal.fire(e.detail);
        });
    </script>
@endsection