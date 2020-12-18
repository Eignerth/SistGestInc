<div>
    <div>
        @can('Comentar Sop. Ticket')
            @include('Soporte.Tickets.comment')
        @endcan
    </div>
    <div>
        <div class="card-body" style="display: block;">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-2">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Prioridad</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$detalle->prioridad}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Clasificación</span>
                        <span class="info-box-number text-center text-muted mb-0">{{$detalle->clasificacion}}</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Estado</span>
                        <span class="info-box-number text-center text-muted mb-0">{{$detalle->status}}</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 overflow-auto" style="height: 700px">
                        <h4>Actividad Reciente</h4>
                        @foreach ($comments as $comment)
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="{{asset('img/default-profile.png')}}" alt="User Image">                            
                                    <span class="username">
                                        {{$comment->personal}}
                                    </span>
                                    <span class="description">Publicado - {{$comment->created_at->diffForHumans()}}</span>
                                </div>                            
                                <p class="mt-1 mb-1">{{$comment->description}}</p>
                                @if ($comment->idpersonals == auth()->user()->idpersonals)
                                    <div class="mt-1 mb-1">
                                        <button class="btn btn-danger btn-sm" wire:click="deleteComment({{$comment->id}})" type="button"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-4 order-1 order-md-1">
                <h4 class="text-navy"><i class="fas fa-ticket-alt"></i></i> {{$detalle->serie}}</h4>
                <div class="text-muted">                    
                <p class="text-sm">Asunto
                    <b class="d-block">{{$detalle->asunto}}</b>
                </p>
                </div>
                <div class="multiline overflow-auto" style="height: 150px;">{{$detalle->mensaje}}</div>
                <br>
                <div class="text-muted">                    
                <p class="text-sm">Cliente y Contacto
                    <b class="d-block">{{$detalle->cliente}} - {{$detalle->contacto}}</b>
                </p>
                <p class="text-sm">Responsable
                    <b class="d-block">{{$detalle->responsable}}</b>
                </p>
                <p class="text-sm">Registro
                    <b class="d-block">{{date('d-m-Y',strtotime($detalle->fecregistro))}} {{$detalle->horregistro}}</b>
                </p>
                <p class="text-sm">Cierre
                    <b class="d-block">{{date('d-m-Y',strtotime($detalle->fectermino))}} {{$detalle->hortermino}}</b>
                </p>
                </div>
                <h5 class="mt-5 text-muted">Documentos Adjuntos</h5>
                <div class="overflow-auto mb-1 mt-1">
                    <ul class="list-unstyled">
                    @foreach ($files as $key=>$file)
                        <li>
                            <a href="#" wire:click="downloadFile({{$file->id}})" class="btn-link text-secondary">
                                <span class="text-navy" style="font-size: 1.2rem">
                                @php
                                    $extension = new SplFileInfo($file->tittle);
                                    $extension = $extension->getExtension();
                                @endphp
                                @if ($extension == 'doc' || $extension == 'docx')
                                    <i class="far fa-file-word"></i>
                                @endif
                                @if ($extension == 'xls' || $extension == 'xlsx')
                                    <i class="far fa-file-excel"></i>
                                @endif
                                @if ($extension == 'ppt' || $extension == 'pptx')
                                    <i class="far fa-file-powerpoint"></i>
                                @endif
                                @if ($extension=='pdf')
                                    <i class="far fa-file-pdf"></i>
                                @endif
                                @if ($extension=='txt')
                                    <i class="far fa-file-alt"></i>
                                @endif
                                @if ($extension=='png'||$extension=='jpg'||$extension=='jpeg')
                                    <i class="far fa-file-image"></i>
                                @endif
                                </span>
                                {{$file->tittle}}
                            </a>
                        </li>                      
                    @endforeach
                    </ul>
                </div>
                @can('Comentar Sop. Ticket')
                    <div class="text-center mt-3 mb-3">
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#commentticket" type="button">Comentar</button>
                    </div>
                @endcan                
            </div>
            </div>
        </div>
    </div>
</div>