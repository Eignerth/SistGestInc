@extends('layouts.app')
@section('tittle','| Clientes')
@section('tittlePage')
    <h1 class="m-0 text-dark">Soporte de Clientes</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('clientes')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Soporte de Clientes</li>
    </ol>
@endsection
@section('content')    
    <div class="card card-outline card-navy">
        <div class="card-body">
            {{--Componente Cliente--}}
            @livewire('customer.customer-component')
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