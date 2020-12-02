@extends('layouts.app')
@section('tittle','| Estado de Avance')
@section('tittlePage')
    <h1 class="m-0 text-dark">Estado de Avance</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Estado de Avance</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-teal">
        <div class="card-body">
            {{--Componente Estado de Prioridad--}}
            @livewire('maintenance.tkstatus-component')
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
