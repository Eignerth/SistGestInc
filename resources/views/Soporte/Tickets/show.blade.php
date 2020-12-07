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
                          <span class="info-box-text text-center text-muted">Estimated budget</span>
                          <span class="info-box-number text-center text-muted mb-0">2300</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Total amount spent</span>
                          <span class="info-box-number text-center text-muted mb-0">2000</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Estimated project duration</span>
                          <span class="info-box-number text-center text-muted mb-0">20</span>
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
                  <div class="multiline">{{$showmensaje}}</div>
                  <br>
                  <div class="text-muted">
                    
                    <p class="text-sm">Client Company
                      <b class="d-block">Deveint Inc</b>
                    </p>
                    <p class="text-sm">Project Leader
                      <b class="d-block">Tony Chicken</b>
                    </p>
                  </div>
    
                  <h5 class="mt-5 text-muted">Project files</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                    </li>
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                    </li>
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                    </li>
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                    </li>
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                    </li>
                  </ul>
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