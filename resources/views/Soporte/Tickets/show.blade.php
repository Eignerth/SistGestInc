<div wire:ignore.self class="modal fade" id="showticket" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="showtickettittle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="showtickettittle">Detalle de Ticket</h5>
            <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Actualizar" wire:click="$refresh"><span style="color: green"><i class="fas fa-sync"></i></span></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Duración</span>
                          <span class="info-box-number text-center text-muted mb-0">{{$showduracion}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Clasificación</span>
                          <span class="info-box-number text-center text-muted mb-0">{{$showclasificacion}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Estado</span>
                          <span class="info-box-number text-center text-muted mb-0">{{$showstatus}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <h4>Recent Activity</h4>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('img/default-profile.png')}}" alt="User Image">                            
                            <span class="username">
                              Jonathan Burke Jr.
                            </span>
                            <span class="description">Shared publicly - 7:45 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore.
                          </p>
    
                          <p>
                            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  <h4 class="text-navy"><i class="fas fa-ticket-alt"></i></i> {{$showserie}}</h4>
                  <div class="text-muted">                    
                    <p class="text-sm">Asunto
                      <b class="d-block">{{$showasunto}}</b>
                    </p>
                  </div>
                  <div class="multiline overflow-auto">{{$showmensaje}}</div>
                  <br>
                  <div class="text-muted">                    
                    <p class="text-sm">Cliente y Contacto
                      <b class="d-block">{{$showcliente}} - {{$showcontacto}}</b>
                    </p>
                    <p class="text-sm">Responsable
                      <b class="d-block">{{$showresponsable}}</b>
                    </p>
                    <p class="text-sm">Registro
                        <b class="d-block">{{date('d-m-Y',strtotime($showfecregistro))}} {{$showhoraregistro}}</b>
                    </p>
                    <p class="text-sm">Cierre
                        <b class="d-block">{{date('d-m-Y',strtotime($showfeccierre))}} {{$showhoracierre}}</b>
                    </p>
                  </div>
    
                  <h5 class="mt-5 text-muted">Documentos Adjuntos</h5>
                  <div class="overflow-auto" style="height: 150px">
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
                  
                  <div class="text-center mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                  </div>
                </div>
              </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
</div>