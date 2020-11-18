@extends('layouts.app')
@section('tittle','| Tipos Identidad')
@section('tittlePage')
    <h1 class="m-0 text-dark">Tipos de Documentos de Identidad</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Tipos de Docs. de Identidad</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-olive">
        <div class="card-body">
            {{--Componente Tipo de Documentos de identidad--}}
            @livewire('maintenance.kinidentification-component')

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
