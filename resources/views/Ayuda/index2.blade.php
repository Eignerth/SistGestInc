
  <body>
 
    <div class="card">
      <h2 class="card-title">HOLA</h2>
    </div>
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Sistema de Gestión</h3>
        <p class="card-text">Al iniciar sesión, observaremos todas las rutas con las diferentes opciones que permitan guiarnos en toda nuestra aplicación web.</p>
        <p class="card-text">Para realizar un buen funcionamiento del sistema, primero veremos todos los pasos que debemos tener en cuenta para configurar el sistema y posteriormente usarlo.</p>
      </div>
      <img src="img/dashboard.png" class="card-img-bottom" alt="inicio">
    </div>
    <!-- Administración -->
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Administración</h3>
        <p class="card-text">Para empezar a configurar nuestra aplicación web, debemos de modificar y crear ciertas opciones, para dejar listo en las siguientes opciones.</p>
      </div>
      <img src="img/administracion.png" class="card-img-bottom" alt="mantenimiento">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingUno">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                Empresa
              </button>
            </h2>
          </div>
          <div id="collapseUno" class="collapse show" aria-labelledby="headingUno" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Empresa</h5>
                      <p class="card-text">Esta opción nos permitirá ver los datos de la empresa</p>
                      <img src="img/empresa.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Datos de la Empresa</h5>
                      <p class="card-text">Con esta opción podremos editar los datos de la empresa.</p>
                      <img src="img/editarEmpresa.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingDos">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                Áreas y Cargos
              </button>
            </h2>
          </div>
          <div id="collapseDos" class="collapse" aria-labelledby="headingDos" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <h5 class="card-title">Áreas</h5>
                              <p class="card-text">Esta opción sirve para agregar los diferentes áreas que conforma la empresa.</p>
                              <img src="img/Areas.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Crear Áreas</h5>
                              <p class="card-text">Para una mejor identificación, crear una abrebiatura que proporcione la suficiente información como para indicar a que se está refiriendo.</p>
                              <img src="img/CrearAreas.png" class="d-block w-100" alt="crear">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Editar Áreas</h5>
                              <p class="card-text">En esta opción, editaremos las áreas que hemos registrado.</p>
                              <img src="img/EditarAreas.png" class="d-block w-100" alt="editar">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <div>
                        <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <h5 class="card-title">Cargos</h5>
                              <p class="card-text">Esta opción sirve para agregar los cargos que se asignan en la empresa.</p>
                              <img src="img/Cargos.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Crear Cargos</h5>
                              <p class="card-text">Para agregar los cargos, debemos tener en cuenta el cargo que tenemos dentro de la empresa.</p>
                              <img src="img/agregarcargos.png" class="d-block w-100" alt="crear">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Editar Cargos</h5>
                              <p class="card-text">En esta opción, editaremos los cargos que hemos registrado anteriormente.</p>
                              <img src="img/EditarCargos.png" class="d-block w-100" alt="editar">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTres">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                Roles y permisos
              </button>
            </h2>
          </div>
          <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-15">
                  <div class="card">
                    <div class="card-body">
                      <div>
                        <div id="carouselExampleIndicato" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <h5 class="card-title">Roles y Permisos</h5>
                              <p class="card-text">Esta opción sirve para agregar los permisos que tendrán los usuarios al usar la aplicación web.</p>
                              <img src="img/rolespermisos.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Agregar Permisos</h5>
                              <p class="card-text">Para agregar los permisos, debemos tener en cuenta las opciones que tenemos dentro de la aplicación, solo seleccionaremos lo que el usuario usará.</p>
                              <img src="img/crearoles1.png" class="d-block w-100" alt="crear">
                            </div>
                            <div class="carousel-item">
                              <h5 class="card-title">Agregar Roles</h5>
                              <p class="card-text">Seguidamente, solo seleccionaremos los roles de edición, eliminado o vistas de acuerdo al criterio anterior, de esta manera bloquearemos las funciones de las opciones a los usuarios.</p>
                              <img src="img/crearoles2.png" class="d-block w-100" alt="editar">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicato" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicato" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingCuatro">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                Personal
              </button>
            </h2>
          </div>
          <div id="collapseCuatro" class="collapse" aria-labelledby="headingCuatro" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Personal</h5>
                      <p class="card-text">Nos permitirá agregar los personales que trabajan en la empresa.</p>
                      <img src="img/Personal.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Agregar Personal</h5>
                      <p class="card-text">Para agregar los personales, debemos tener en cuenta los campos obligatorias.</p>
                      <img src="img/AgregarPersonal.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Personal</h5>
                      <p class="card-text">Podremos editar los personales que hemos agregado.</p>
                      <img src="img/Personal.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingCinco">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                Productos & Servicios
              </button>
            </h2>
          </div>
          <div id="collapseCinco" class="collapse" aria-labelledby="headingCinco" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-15">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Productos y servicios</h5>
                      <p class="card-text">Esta opción nos permitirá agregar los productos que la empresa ofrece a los clientes.</p>
                      <img src="img/ControldeSeries.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Crear Series</h5>
                      <p class="card-text">Esta opción nos permitirá crear series a las incidencias para una mejor identificación. También tenemos la opción de activar la serie para su uso.</p>
                      <img src="img/crearseries.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Series</h5>
                      <p class="card-text">Esta opción nos permitirá editar las series creadas.</p>
                      <img src="img/editseries.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeis">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                Usuarios
              </button>
            </h2>
          </div>
          <div id="collapseSeis" class="collapse" aria-labelledby="headingSeis" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mantenimiento de tablas -->
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Mantenimiento de tablas</h3>
        <p class="card-text">En estas opciones podrás agregar tipos de documentos de identidad, canales de atención, clasificar incidencias, prioridades de una tarea, controlar series y agregar estados de avance de las incidencias.</p>
      </div>
      <img src="img/mantenimiento.png" class="card-img-bottom" alt="mantenimiento">
      <div class="accordion" id="accordionExample1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Tipo de Documentos de Identidad
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Documento de Identidad</h5>
                      <p class="card-text">Esta opción nos permitirá agregar diferentes tipos de documentos de identidad.</p>
                      <img src="img/docidentidad.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Agregar Documento de Identidad</h5>
                      <p class="card-text">Para agregar un documento, debemos de tener en cuenta los siguientes campos:</p>
                      <img src="img/agregardocidentidad.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Documento de Identidad</h5>
                      <p class="card-text">Esta opción, nos permitira editar el tipo de documento de identidad.</p>
                      <img src="img/editardocidentidad.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Canales de Atención
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Canales de Atención</h5>
                      <p class="card-text">Esta opción nos permitirá agregar diferentes tipos de comunicación que tenemos con el cliente.</p>
                      <img src="img/canalesatencion.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Agregar Canal de Atención</h5>
                      <p class="card-text">Para agregar los canales de atención, solo tendremos que ingresar su descripción.</p>
                      <img src="img/crearcanalatencion.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Canales de Atención</h5>
                      <p class="card-text">Esta opción, nos permitira editar el tipo de atención.</p>
                      <img src="img/edircanal.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Clasificación de Incidencias
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample1">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Clasificación de Incidencias</h5>
                      <p class="card-text">Esta opción nos permitirá agregar las diferentes clasificaciones de incidencias.</p>
                      <img src="img/clasifIncidencias.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Agregar Clasificación de Incidencias</h5>
                      <p class="card-text">Para agregar clasificación de incidencias, se deben definir correctamente si es una incidencia, requerimiento o consulta.</p>
                      <img src="img/crearclasinciden.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Editar Clasificación de Incidencias</h5>
                      <p class="card-text">Esta opción nos permitira editar las clasificaciones que hemos registrado anteriormente.</p>
                      <img src="img/EditClasInci.png" class="card-img-bottom" alt="inicio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Estado de Prioridad
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample1">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Estado de Prioridad</h5>
                    <p class="card-text">Esta opción nos permitirá definir la prioridad de las incidencias.</p>
                    <img src="img/estadoPrioridad.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Estado de Prioridad</h5>
                    <p class="card-text">Para agregar estados de prioridad, debemos definir correctamente el seguimiento que se le dará a las incidencias.</p>
                    <img src="img/crearEstadoPriori.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Estado de Prioridad</h5>
                    <p class="card-text">Esta opción nos permitira editar los estados de prioridad.</p>
                    <img src="img/editestadoprio.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Control de Series
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample1">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Control de Series</h5>
                    <p class="card-text">Esta opción nos permitirá agregar nuevas series a las incidencias.</p>
                    <img src="img/ControldeSeries.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Crear Series</h5>
                    <p class="card-text">Esta opción nos permitirá crear series a las incidencias para una mejor identificación. También tenemos la opción de activar la serie para su uso.</p>
                    <img src="img/crearseries.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Series</h5>
                    <p class="card-text">Esta opción nos permitirá editar las series creadas.</p>
                    <img src="img/editseries.png" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Estado de Avance
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample1">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </body>
