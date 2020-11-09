@extends('layouts.app')
@section('tittle','| Contactos')

@section('tittlePage')
    <h1 class="m-0 text-dark">Contactos</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('clientes')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Contactos</li>
    </ol>
@endsection
@section('content')    
    <div class="card card-outline card-purple">
        <div class="card-body">
            {{--Componente Contacto--}}
            @livewire('customer.contact-component')
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