<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.min.css')}}">
    <style>
        .round_table {
                border-collapse:separate;
                border:solid black 1px;
                border-radius:10px;
                -moz-border-radius:10px;
                -webkit-border-radius: 5px;
                
        }
        th{
            color: #0f0f4e;
        }

    </style>
</head>
<body>

    <div class="row mb-1">
        <div class="float-left">
            <img src="{{asset('/img/logo_BSS.jpg')}}" width="150px">
        </div>
        <div class="float-right">               
            <table class="round_table text-center">
                <tr class="table-active">
                    <td>Ticket N°</td>
                </tr>
                <tr>
                    <td><strong>{{$serie}}</strong></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>

    <div class="row">
        
        <div class="mt-5">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center" style="color: #0f0f4e">
                        <th colspan="4"><h3 style="font-family: Arial">Documento de Atención al Cliente</h3> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Razón Social</th>
                        <td colspan="3">{{$cliente}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Contacto que notificó</th>
                        <td colspan="3">{{$contacto}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Asunto del Ticket</th>
                        <td colspan="3">{{$asunto}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Producto y/o Servicio</th>
                        <td colspan="3">{{$producto}}</td>
                    </tr>                    
                    <tr>
                        <th scope="row">Fecha Inicio de Atención</th>
                        <td>{{date('d-m-Y',strtotime($fecregistro))}} {{date('h:i a',strtotime($horregistro)) }}</td>
                        <th scope="row">Fecha Cierre de Atención</th>
                        <td>{{ !is_null($fectermino)? date('d-m-Y',strtotime($fectermino)):''}} {{!is_null($hortermino)?date('h:i a',strtotime($hortermino)):'' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Estado de Atención</th>
                        <td colspan="3">{{$status}}</td>
                    </tr>
                    
                    <tr>
                        <th scope="row">Tipo de Atención</th>
                        <td colspan="3">{{$clasificacion}}</td>
                    </tr>
                    <tr>
                        <th colspan="4">
                            <hr>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">Responsable de atención</th>
                        <td>{{$personal}}</td>
                        <th scope="row">Correo del Responsable</th>
                        <td>{{$email}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Detalle de la Atención</th>
                        <td colspan="3">{{$mensaje}}</td>
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>