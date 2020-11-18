@extends('layouts.app')
@section('tittle','| Canales de Atención')
@section('tittlePage')
    <h1 class="m-0 text-dark">Canales de Atención</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('mantenimientos')}}">Mantenimiento - Tablas</a></li>
        <li class="breadcrumb-item active">Canales de Atecnción</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-purple">
        <div class="card-body">
            {{--Componente Canal de atencion--}}
            @livewire('maintenance.channel-component')

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
