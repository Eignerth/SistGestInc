@extends('layouts.app')
@section('tittle','| Mant. - Clasif. de Inc.')
@section('tittlePage')
    <h1 class="m-0 text-dark">Clasificación de Incidencias</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Clasificación de Incidencias</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-navy">
        <div class="card-body">
            {{--Componente Canal de atencion--}}
            @livewire('maintenance.classification-component')

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
