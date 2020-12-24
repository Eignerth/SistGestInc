@extends('layouts.app')
@section('tittle','| Personal')
@section('tittlePage')
    <h1 class="m-0 text-dark">Base de Conocimientos</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">KB</a></li>
    </ol>
@endsection
@section('content')    
    <div class="card card-outline card-lightblue">
        <div class="card-body">
            {{--Componente Kb--}}
            @livewire('kb.kb-component')
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