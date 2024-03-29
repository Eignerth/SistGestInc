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
            <div class="card card-outline card-olive">
                <h4 class="card-header">Tipo de Docs. de Identidad</h4>
                <div class="card-body">
                    <p>
                        Aquí usted podrá administrar los tipo de documentos de identidad.
                    </p>
                    @can('Ver Docs Identidad')
                    <a href="{{route('docidentidad.index')}}" class="btn bg-olive">Ir a Tipo Docs. Identidad</a>
                    @endcan
                </div>  
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-purple">
            <h4 class="card-header">Canales de Atención</h4>
            <div class="card-body">
                <p>
                    Podrá administrar las áreas de la empresa, así como los cargos que cada área posee
                </p>
                @can('Ver Canales de Atención')
                <a href="{{route('canales_atencion.index')}}" class="btn bg-purple">Ir a Áreas y Cargos</a>
                @endcan
            </div>  
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-navy">
            <h4 class="card-header">Clasificación de Incidencias</h4>
            <div class="card-body">
                <p>En esta opción podrá administrar los permisos de cada rol, incluyendo los roles.</p>
                @can('Ver Clasif. Inc.')
                <a href="{{route('clasificacion_inc.index')}}" class="btn bg-navy">Ir a Roles y Permisos</a>
                @endcan
            </div>  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-teal">
            <h4 class="card-header">Status de Incidencias</h4>
            <div class="card-body">
                <p>
                    En esta opción podrá administrar el personal que usará el sistema.
                </p>
                @can('Ver Estado de avance')
                <a href="{{route('estado_de_avance.index')}}" class="btn bg-teal">Ir a Status</a>
                @endcan
            </div>            
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-outline card-lightblue">
            <h4 class="card-header">Estado de Prioridad</h4>
            <div class="card-body">
                <p>
                    Administrar los productos y/o servicios que ofrece la empresa.
                </p>
                @can('Ver Estado de Prioridad')
                <a href="{{route('estado_de_prioridad.index')}}" class="btn bg-lightblue">Ir a Estados de Prioridad</a>
                @endcan
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-orange">
            <h4 class="card-header">Control de Serie</h4>
            <div class="card-body">
                <p>
                    Administrar los productos y/o servicios que ofrece la empresa.
                </p>
                @can('Ver Control de Series')
                <a href="{{route('control_de_serie.index')}}" class="btn bg-orange">Ir a Estados de Prioridad</a>
                @endcan  
            </div>
            </div>
        </div>
    </div>
    
    
@endsection