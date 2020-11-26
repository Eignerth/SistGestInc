@extends('layouts.app')
@section('tittle','| Control de Series')
@section('tittlePage')
    <h1 class="m-0 text-dark">Control de Series</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Control de Series</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-orange">
        <div class="card-body">
            {{--Componente Estado de Prioridad--}}
            @livewire('maintenance.ticketsm-component')
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
