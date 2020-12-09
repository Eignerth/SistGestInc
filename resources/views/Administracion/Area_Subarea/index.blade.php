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

    <div class="card card-purple card-tabs">
        <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs justify-content-center" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="areas-tab" data-toggle="pill" href="#areas-body" role="tab" aria-controls="areas-body" aria-selected="true">Áreas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="cargos-tab" data-toggle="pill" href="#cargos-body" role="tab" aria-controls="cargos-body" aria-selected="false">Cargos</a>
            </li>
        </ul>
        </div>
        <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="areas-body" role="tabpanel" aria-labelledby="areas-tab">
                {{--Componente Area--}}
                @livewire('administration.area-possition.area-component')
            </div>
            <div class="tab-pane fade" id="cargos-body" role="tabpanel" aria-labelledby="cargos-tab">
                {{--Componente Possition--}}
                @livewire('administration.area-possition.possition-component')
            </div>
        </div>
        </div>          
    </div>    
@endsection

@section('js')

<script type="text/javascript" src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('vendor/select2/js/i18n/es.js')}}"></script>
<script>
    window.addEventListener('swal',function(e){ 
        Swal.fire(e.detail);
    });
     $(document).ready(function() {
        $('#area').select2({
            language: "es",
            theme:'bootstrap4',
            minimumInputLength:1,
            placeholder:'Área',
            allowClear: true,            
        });
    });  
</script>
    
@endsection
