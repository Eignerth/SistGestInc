@extends('layouts.app')
@section('css')
    <style>
        .multiline{
            white-space: pre-wrap;
            overflow-y: scroll;
            height: 100px;
        }
    </style>
@endsection
@section('tittle','| Tickets - Soporte')
@section('tittlePage')
    <h1 class="m-0 text-dark">Tickets - Soporte</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('soporte')}}">Soporte</a></li>
        <li class="breadcrumb-item active">Tickets - Soporte</li>
    </ol>
@endsection
@section('content')

    <div class="card card-outline card-purple">
        <div class="card-body">
            {{--Componente Listado de Tickets--}}
            @livewire('support.tickets-component')
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
