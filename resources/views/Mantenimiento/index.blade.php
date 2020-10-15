@extends('layouts.app')
@section('tittle','| Mantenimiento')
@section('tittlePage')
    <h1 class="m-0 text-dark">Mantenimiento</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Mantenimiento</li>        
    </ol>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-purple">
                <h4 class="card-header">Tipo Docs. Identidad</h4>
                <div class="card-body">
                    <p>
                        Aquí usted podrá administrar los tipo de documentos de identidad.
                    </p>
                    <a href="{{route('empresa.index')}}" class="btn bg-purple">Ir a Tipo Docs. Identidad</a>
                </div>            
            </div>

        </div>
        <div class="col-md-4">
            <div class="card card-outline card-navy">
            <h4 class="card-header">Áreas y Cargos</h4>
            <div class="card-body">
                <p>
                    Podrá administrar las áreas de la empresa, así como los cargos que cada área posee
                </p>
                <a href="{{route('empresa.index')}}" class="btn bg-navy">Ir a Áreas y Cargos</a>
            </div>            
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-olive">
            <h4 class="card-header">Roles y Permisos</h4>
            <div class="card-body">
                <p>En esta opción podrá administrar los permisos de cada rol, incluyendo los roles.</p>
                <a href="{{route('empresa.index')}}" class="btn bg-olive">Ir a Roles y Permisos</a>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-lightblue">
            <h4 class="card-header">Personal</h4>
            <div class="card-body">
                <p>
                    En esta opción podrá administrar el personal que usará el sistema.
                </p>
                <a href="{{route('empresa.index')}}" class="btn bg-lightblue">Ir a Personal</a>
            </div>            
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-outline card-teal">
            <h4 class="card-header">Productos y Servicios</h4>
            <div class="card-body">
                <p>
                    Administrar los productos y/o servicios que ofrece la empresa.
                </p>
                <a href="{{route('empresa.index')}}" class="btn bg-teal">Ir a Productos y Servicios</a>
            </div>
            </div>
        </div>
    </div>
    
    
@endsection
@section('js')
@endsection