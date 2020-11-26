<div>
    {{--incluir modal edit--}}
    @can('Editar Empresa')
        @include('Administracion.Empresa.edit')
    @endcan

    <div class="d-flex justify-content-between">
        <div>
            <h1>{{$company->description}}</h1>        
        </div>
        @can('Editar Empresa')
            
            <div class="align-self-center">
                <button data-toggle="modal" data-target="#updatecompany" wire:click="edit()" class="btn btn-warning bt-sm inline"><i class="fas fa-edit"></i>&nbsp;Editar</button>        
            </div>      
        @endcan
    </div>
    <table class="table table-hover text-center.">
        <tbody>
            <tr>
                <th scope="row">RUC</th>
                <td colspan="3">{{$company->ruc}}</td>
            </tr>
            <tr>
                <th scope="row">Dirección</th>
                <td colspan="3">{{$company->address}}</td>
            </tr>
            <tr>
                <th scope="row">Gerente General</th>
                <td>{{$company->principal}}</td>
            </tr>
            <tr>
                <th scope="row">Teléfono</th>
                <td colspan="3">{{$company->telf}}</td>
            </tr>
            <tr>
                <th scope="row">Correo Electrónico</th>
                <td colspan="3">{{$company->email}}</td>
            </tr>
            <tr>
                <th scope="row">Página Web &nbsp;<a href="https://{{$company->web}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-globe" aria-hidden="true"></i></a></th>
                <td colspan="3">{{$company->web}}</td>
            </tr>
        </tbody>
    </table>
</div>
