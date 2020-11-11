@extends('layouts.app')
@section('tittle','| Productos - Servicios')
@section('tittlePage')
    <h1 class="m-0 text-dark">Productos - Servicios</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">Administración</a></li>
        <li class="breadcrumb-item active">Productos y Servicios</li>
    </ol>
@endsection
@section('content')    
    <div class="card card-outline card-teal">
        <div class="card-body">
            {{--Componente Producto-Servicio--}}
            @livewire('administration.product.product-component')
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-teal">
                <div class="card-header">
                    <h3 class="card-title">Menús</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente Menu--}}
                    @livewire('administration.product.menu-component')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-outline card-teal">
                <div class="card-header">
                    <h3 class="card-title">Sub-Menús</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente SubMenu--}}
                    @livewire('administration.product.submenu-component')
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-teal">
                <div class="card-header">
                    <h3 class="card-title">Opción</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente Option--}}
                    @livewire('administration.product.option-component')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-teal">
                <div class="card-header">
                    <h3 class="card-title">Sub-Opción</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente SubOption--}}
                    @livewire('administration.product.suboption-component')
                </div>
            </div>
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