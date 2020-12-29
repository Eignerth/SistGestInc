@extends('layouts.app')
@section('tittle','Dashboard')
@section('tittlePage')
    <h1 class="m-0 text-dark">Dashboard</h1>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
@endsection
@section('content')    
    <div class="row">
        <div class="col-lg-3 col-6">
        <div class="small-box bg-purple">
            <div class="inner">
            <h3>{{$tkregister}}</h3>
            <p>Tickets de Soporte Registrados - Hoy</p>
            </div>
            <div class="icon">
                <i class="fas fa-ticket-alt"></i>
            </div>
            <a href="{{route('tickets-support.index')}}" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
            <h3>{{$tkclose}}</h3>
            <p>Tickets de Soporte Terminados - Hoy</p>
            </div>
            <div class="icon">
                <i class="fas fa-ticket-alt"></i>
            </div>
            <a href="{{route('tickets-support.index')}}" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>{{$kb}}</h3>
            <p>Base de Conocimientos - Total</p>
            </div>
            <div class="icon">
            <i class="nav-icon fas fa-atlas"></i>
            </div>
            <a href="{{route('base-conocimiento.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>{{$customers}}</h3>
            <p>Clientes</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-address-book"></i>
            </div>
            <a href="{{route('soporte_de_clientes.index')}}" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
    </div>
    
    
@endsection