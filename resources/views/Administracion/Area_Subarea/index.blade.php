@extends('layouts.app')
@section('tittle','| Áreas - Cargos')
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2-bs4.min.css')}}">
@endsection
@section('tittlePage')
    <h1 class="m-0 text-dark">Áreas y Cargos</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item disable"><a href="{{route('administracion')}}">Administración</a></li>
        <li class="breadcrumb-item active">Áreas y Cargos</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title">Áreas</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente Area--}}
                    @livewire('administration.area-possition.area-component')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title">Cargos</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>                
                </div>
                <div class="card-body">
                    {{--Componente Cargo--}}
                    @livewire('administration.area-possition.possition-component')
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
