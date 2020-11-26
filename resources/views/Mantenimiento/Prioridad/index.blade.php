@extends('layouts.app')
@section('tittle','| Prioridad')
@section('tittlePage')
    <h1 class="m-0 text-dark">Estado de Prioridad</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Estado de Prioridad</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-lightblue">
        <div class="card-body">
            {{--Componente Estado de Prioridad--}}
            @livewire('maintenance.prioritie-component')
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
