@extends('layouts.app')
@section('tittle','| Empresa')
@section('tittlePage')
    <h1 class="m-0 text-dark">Roles y Permisos</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">Administración</a></li>
        <li class="breadcrumb-item active">Roles y Permisos</li>
    </ol>
@endsection
@section('content')    

    <div class="card card-outline card-warning">
        <div class="card-body">
            {{--Componente Personal--}}
            @livewire('administration.role-permission-component')
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