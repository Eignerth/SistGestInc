@extends('layouts.app')
@section('tittle','| Clientes')
@section('tittlePage')
    <h1 class="m-0 text-dark">Clientes</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Clientes</li>        
    </ol>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-navy">
                <h4 class="card-header">Soporte de Clientes</h4>
                <div class="card-body">
                    <p>
                        En Soporte de Clientes, podrá visualizar, crear o actualizar la cartera de clientes que la empresa tiene.
                    </p>
                    @can('Ver Soporte de Clientes', Model::class)
                    <a href="{{route('soporte_de_clientes.index')}}" class="btn bg-navy">Ir a Soporte de Clientes</a>
                    @endcan
                </div>  
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-outline card-purple">
            <h4 class="card-header">Contactos</h4>
            <div class="card-body">
                <p>
                    Los Contactos, permitirá tener un mejor conocimiento del personal de cada empresa que tenemos como cliente.
                </p>
                @can('Ver Contactos')
                <a href="{{route('contactos.index')}}" class="btn bg-purple">Ir a Contactos</a>
                @endcan    
            </div>            
            </div>
        </div>
    </div>  
    
    
@endsection
@section('js')
@endsection