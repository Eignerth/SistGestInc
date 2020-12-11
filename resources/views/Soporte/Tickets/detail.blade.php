@extends('layouts.app')
@section('css')
    <style>
        .multiline{
            white-space: pre-wrap;
            height: 150px;
        }
    </style>
@endsection
@section('tittle','| Tickets - Soporte')
@section('tittlePage')
    <h1 class="m-0 text-dark">Tickets - Detalle</h1>
@endsection
@section('content')

    <div class="card card-outline card-purple">
        <div class="card-header">            

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            {{--Componente Detalle de Tickets--}}
            
            @livewire('support.ticketdetail-component',['ticket'=>$ticket])
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
