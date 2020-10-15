@extends('layouts.app')
@section('tittle','| Empresa')
@section('tittlePage')
    <h1 class="m-0 text-dark">Empresa</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">Administración</a></li>
        <li class="breadcrumb-item active">Empresa</li>
    </ol>
@endsection
@section('content')    
    
    @livewire('administration.company.company-component')
    
@endsection
@section('js')
    <script>
        window.addEventListener('swal',function(e){ 
            Swal.fire(e.detail);
        });
    </script>
@endsection