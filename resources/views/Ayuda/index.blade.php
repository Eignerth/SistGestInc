@extends('layouts.app')
@section('tittle','| Áreas - Cargos')
@section('tittlePage')
    <h1 class="m-0 text-dark">Ayuda</h1>
@endsection
@section('content')

<div class="card" id="sistgest">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Sistema de Gestión</h3>
      <p class="card-text">Al iniciar sesión, observaremos todas las rutas con las diferentes opciones que permitan guiarnos en toda nuestra aplicación web.</p>
      <p class="card-text">Para realizar un buen funcionamiento del sistema, primero veremos todos los pasos que debemos tener en cuenta para configurar el sistema y posteriormente usarlo.</p>
      <img src="{{asset('img/help/dashboard.png')}}" class="card-img-bottom" alt="inicio">
    </div>
  </div>
  <!-- Administración -->
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Administración</h3>
      <p class="card-text">Para empezar a configurar nuestra aplicación web, debemos de modificar y crear ciertas opciones, para dejar listo en las siguientes opciones.</p>
      <img src="{{asset('img/help/administracion.png')}}" class="card-img-bottom" alt="inicio">
    </div>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingUno">
          <h2 class="mb-0">
            <button id="empresa" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
              Empresa
            </button>
          </h2>
        </div>
        <div id="collapseUno" class="collapse" aria-labelledby="headingUno" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Empresa</h5>
                    <p class="card-text">Esta opción nos permitirá ver los datos actualizados de la empresa.</p>
                    <img src="{{asset('img/help/empresa.png')}}" class="card-img-bottom" alt="inicio" style="margin-left: auto; margin-right: auto;">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Datos de la Empresa</h5>
                    <p class="card-text">Con esta opción podremos editar los datos de la empresa.</p>
                    <img src="{{asset('img/help/editarEmpresa.png')}}" class="card-img-bottom" alt="inicio">
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
              <div class="col-sm-12">
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
                            <img src="{{asset('img/help/Areas.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <h5 class="card-title">Crear Áreas</h5>
                            <p class="card-text">Para una mejor identificación, crear una abrebiatura que proporcione la suficiente información como para indicar a que se está refiriendo.</p>
                            <img src="{{asset('img/help/CrearAreas.png')}}" class="d-block w-50" alt="crear" style="margin-left: auto; margin-right: auto;">
                          </div>
                          <div class="carousel-item">
                            <h5 class="card-title">Editar Áreas</h5>
                            <p class="card-text">En esta opción, editaremos las áreas que hemos registrado.</p>
                            <img src="{{asset('img/help/EditarAreas.png')}}" class="d-block w-50" alt="editar" style="margin-left: auto; margin-right: auto;">
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
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
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
                          <img src="{{asset('img/help/Cargos.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <h5 class="card-title">Crear Cargos</h5>
                          <p class="card-text">Para agregar los cargos, debemos tener en cuenta el cargo que tenemos dentro de la empresa. En la opción de área, seleccionaremos las áreas que existen en la empresa, esto permitirá que a cada usuario que este registrado con cierta área, pueda tener restricciones.</p>
                          <img src="{{asset('img/help/agregarcargos.png')}}" class="d-block w-50" alt="crear" style="margin-left: auto; margin-right: auto;">
                        </div>
                        <div class="carousel-item">
                          <h5 class="card-title">Editar Cargos</h5>
                          <p class="card-text">En esta opción, editaremos los cargos que hemos registrado anteriormente.</p>
                          <img src="{{asset('img/help/EditarCargos.png')}}" class="d-block w-50" alt="editar" style="margin-left: auto; margin-right: auto;">
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
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Roles y permisos</h5>
                    <p class="card-text">Esta opción nos permitirá editar los roles y permisos que tendrán los usuarios dentro de la aplicación web.</p>
                    <img src="{{asset('img/help/rolespermisos.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">  
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExample" data-slide-to="1"></li>
                        <li data-target="#carouselExample" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <h5 class="card-title">Agregar Permisos</h5>
                          <p class="card-text">Para agregar los permisos, debemos tener en cuenta las opciones que tenemos dentro de la aplicación, solo seleccionaremos lo que el usuario usará.</p>
                          <img src="{{asset('img/help/crearoles1.png')}}" class="d-block w-100" alt="crear">
                        </div>
                        <div class="carousel-item">
                          <h5 class="card-title">Agregar Permisos</h5>
                          <p class="card-text">Para agregar los permisos, debemos tener en cuenta las opciones que tenemos dentro de la aplicación, solo seleccionaremos los módulos que el usuario usará.</p>
                          <img src="{{asset('img/help/crearoles2.png')}}" class="d-block w-100" alt="crear">
                        </div>
                        <div class="carousel-item">
                          <h5 class="card-title">Agregar Roles</h5>
                            <p class="card-text">Seguidamente, solo seleccionaremos los roles de edición, eliminado o vistas de acuerdo al criterio anterior, de esta manera bloquearemos las funciones de las opciones a los usuarios.</p>
                            <img src="{{asset('img/help/crearseries.png')}}" class="d-block w-100" alt="editar">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
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
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Personal</h5>
                    <p class="card-text">Nos permitirá agregar los personales que trabajan en la empresa.</p>
                    <img src="{{asset('img/help/Personal.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Personal</h5>
                    <p class="card-text">Para agregar los personales, ingresaremos sus nombres y apellidos, el tipo de documento de identidad, RUC (si tuviese), telefono, celular, email (personal o empresarial), dirección, cargo que oucpa en la empresa, fecha de nacimiento y opcional, alguna nota adicional que agregar.</p>
                    <img src="{{asset('img/help/AgregarPersonal.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Personal</h5>
                    <p class="card-text">Podremos editar los personales que hemos agregado.</p>
                    <img src="{{asset('img/help/editperson.png')}}" class="card-img-bottom" alt="inicio">
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
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Productos y servicios</h5>
                    <p class="card-text">Esta opción nos permitirá agregar los productos que la empresa ofrece a los clientes. Ingresaremos una abreviatura, descripción y una nota adicional que se desee agregar.</p>
                    <img src="{{asset('img/help/prod_serv.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Menús</h5>
                    <p class="card-text">Esta opción nos permitirá definir los menús de los sistemas Integral y ERP. En donde seleccionaremos el producto que hemos creado anteriormente y una descripción tal cuál tenga los productos.</p>
                    <p class="card-text">Por ejemplo, los menús de ventas, almacén, finanzas,etc.</p>
                    <img src="{{asset('img/help/menus.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Sub-menús</h5>
                    <p class="card-text">Esta opción nos permitirá definir los submenús de los sitemas de Integral y ERP.</p>
                    <p class="card-text">Por ejemplo, el Menú Almacén, contiene un submenú llamado Compras.</p>
                    <img src="{{asset('img/help/submenus.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Opción</h5>
                    <p class="card-text">Esta opción nos permitirá agregar opciones de los submenús.</p>
                    <p class="card-text">Por ejemplo, en el submenú llamado compras, hay la opción de Pedidos.</p>
                    <img src="{{asset('img/help/opcion.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Sub-opción</h5>
                    <p class="card-text">Esta opción nos permitirá crear sub-opciones, en caso si lo requiere el menú.</p>
                    <img src="{{asset('img/help/subopcion.png')}}" class="card-img-bottom" alt="inicio">
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
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text">Esta opción nos permitirá agregar los usuarios que tendrán acceso a este sistema.</p>
                    <img src="{{asset('img/help/usuarios.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Crear Usuarios</h5>
                    <p class="card-text">Esta opción nos permitirá crear usuarios de acceso a esta aplicación web.</p>
                    <p class="card-text">Escogeremos al personal que hemos agregado anteriormente, se le colocará un nombre de usuario y una contraseña y por último, escogeremos el rol que cumple dentro de la empresa.</p>
                    <img src="{{asset('img/help/crearuser.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Series</h5>
                    <p class="card-text">Esta opción nos permitirá editar los usuarios que se han creado anteriormente.</p>
                    <img src="{{asset('img/help/edituser.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
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
      <p class="card-text">Hay un check, el cuál permite activar la cuenta o al mismo tiempo desactivarla.</p>
      <img src="{{asset('img/help/mantenimiento.png')}}" class="card-img-bottom" alt="mantenimiento">
    </div>
    <div class="accordion" id="accordionExample1">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Tipo de Documentos de Identidad
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento de Identidad</h5>
                    <p class="card-text">Esta opción nos permitirá agregar diferentes tipos de documentos de identidad.</p>
                    <img src="{{asset('img/help/docidentidad.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Documento de Identidad</h5>
                    <p class="card-text">Esta opción nos permite crear diferentes documentos de identidad, ya sea un DNI o un Registro Único de contribuyentes.</p>
                    <img src="{{asset('img/help/agregardocidentidad.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Documento de Identidad</h5>
                    <p class="card-text">Esta opción, nos permitira editar el tipo de documento de identidad.</p>
                    <img src="{{asset('img/help/editardocidentidad.png')}}" class="card-img-bottom" alt="inicio">
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
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Canales de Atención</h5>
                    <p class="card-text">Esta opción nos permitirá agregar diferentes tipos de comunicación que tenemos con el cliente.</p>
                    <img src="{{asset('img/help/canalesatencion.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Canal de Atención</h5>
                    <p class="card-text">Para agregar los canales de atención, solo tendremos que ingresar su descripción.</p>
                    <p class="card-text">Por ejemplo, ingresaremos si el canal de atención es por teléfono, correo, celular.</p>
                    <img src="{{asset('img/help/crearcanalatencion.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Canales de Atención</h5>
                    <p class="card-text">Esta opción, nos permitira editar el tipo de atención.</p>
                    <img src="{{asset('img/help/edircanal.png')}}" class="card-img-bottom" alt="inicio">
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
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Clasificación de Incidencias</h5>
                    <p class="card-text">Esta opción nos permitirá agregar las diferentes clasificaciones de incidencias.</p>
                    <img src="{{asset('img/help/clasifIncidencias.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Clasificación de Incidencias</h5>
                    <p class="card-text">Para agregar clasificación de incidencias, se deben definir correctamente si es una incidencia, requerimiento o consulta.</p>
                    <img src="{{asset('img/help/crearclasinciden.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Clasificación de Incidencias</h5>
                    <p class="card-text">Esta opción nos permitira editar las clasificaciones que hemos registrado anteriormente.</p>
                    <img src="{{asset('img/help/EditClasInci.png')}}" class="card-img-bottom" alt="inicio">
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
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Estado de Prioridad</h5>
                  <p class="card-text">Esta opción nos permitirá definir la prioridad de las incidencias.</p>
                  <img src="{{asset('img/help/estadoPrioridad.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Agregar Estado de Prioridad</h5>
                  <p class="card-text">Para agregar estados de prioridad, debemos definir correctamente el seguimiento que se le dará a las incidencias.</p>
                  <img src="{{asset('img/help/crearEstadoPriori.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Editar Estado de Prioridad</h5>
                  <p class="card-text">Esta opción nos permitira editar los estados de prioridad.</p>
                  <img src="{{asset('img/help/editestadoprio.png')}}" class="card-img-bottom" alt="inicio">
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
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Control de Series</h5>
                  <p class="card-text">Esta opción nos permitirá agregar nuevas series a las incidencias.</p>
                  <img src="{{asset('img/help/ControldeSeries.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Crear Series</h5>
                  <p class="card-text">Esta opción nos permitirá crear series a las incidencias para una mejor identificación. También tenemos la opción de activar la serie para su uso.</p>
                  <img src="{{asset('img/help/crearseries.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Editar Series</h5>
                  <p class="card-text">Esta opción nos permitirá editar las series creadas.</p>
                  <img src="{{asset('img/help/editseries.png')}}" class="card-img-bottom" alt="inicio">
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
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Estado de avance</h5>
                  <p class="card-text">Esta opción nos permitirá manejar los estados de avance de cada incidencia.</p>
                  <img src="{{asset('img/help/estavance.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Crear estado</h5>
                  <p class="card-text">Esta opción nos permitirá crear los estados de avance de las incidencias, donde se tendrá que brindar en unas pocas palabras, el avanze que tiene una incidencia.</p>
                  <p class="card-text">Podremos escoger un color, que nos permita identificar rápidamente el estado de la incidencia.</p>
                  <img src="{{asset('img/help/crearestado.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Editar estado</h5>
                  <p class="card-text">Esta opción nos permitirá editar la definición de los estados de avance.</p>
                  <img src="{{asset('img/help/editestado.png')}}" class="card-img-bottom" alt="inicio">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Clientes-->
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Clientes</h3>
      <p class="card-text">Estas opciones nos permitiran administrar los clientes de la empresa.</p>
      <img src="{{asset('img/help/Client.png')}}" class="card-img-bottom" alt="inicio">
    </div>
    <div class="accordion" id="accordionExample2">
      <div class="card">
        <div class="card-header" id="heading1">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
              Contactos
            </button>
          </h2>
        </div>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample2">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Contactos</h5>
                    <p class="card-text">Esta opción nos permitirá agregar los contactos de los trabajadores que tiene cada cliente.</p>
                    <p class="card-text">Para agregar un contacto, seleccionaremos la empresa donde labora, nombres y apellidos, teléfono, celular y el cargo que tiene dentro de su empresa.</p>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('img/help/Contactos.png')}}" class="card-img-bottom" alt="inicio">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('img/help/crearcontact.png')}}" class="d-block w-50" style="margin-left: auto; margin-right: auto;" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
      <div class="card">
        <div class="card-header" id="heading2">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              Soporte de clientes
            </button>
          </h2>
        </div>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample2">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Soporte de Clientes</h5>
                    <p class="card-text">Esta opción nos permitirá agregar los clientes de la empresa BSS.</p>
                    <img src="{{asset('img/help/SopClientes.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>  
    </div>
  </div>
  <!--Perfil-->
  <div class="card">
  <div class="card-body">
    <h3 class="card-title">Perfil</h3>
    <p class="card-text">Para empezar a configurar nuestra aplicación web, debemos de modificar y crear ciertas opciones, para dejar listo en las siguientes opciones.</p>
    <img src="{{asset('img/help/dashboard.png')}}" class="card-img-bottom" alt="inicio">
  </div>
  <div class="accordion" id="accordionExample3">
    <div class="card">
      <div class="card-header" id="headingl">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsel" aria-expanded="true" aria-controls="collapsel">
            Datos Personales
          </button>
        </h2>
      </div>
      <div id="collapsel" class="collapse" aria-labelledby="headingl" data-parent="#accordionExample3">
        <div class="card-body">
          
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingll">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsell" aria-expanded="false" aria-controls="collapsell">
            Bitácora
          </button>
        </h2>
      </div>
      <div id="collapsell" class="collapse" aria-labelledby="headingll" data-parent="#accordionExample3">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headinglll">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapselll" aria-expanded="false" aria-controls="collapselll">
            Cambiar contraseña
          </button>
        </h2>
      </div>
      <div id="collapselll" class="collapse" aria-labelledby="headinglll" data-parent="#accordionExample3">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Soporte-->
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Soporte</h3>
      <p class="card-text">En este módulo, manejaremos todos los tickets que se irán registrando de acuerdo a las incidencias que se registren.</p>
      <img src="{{asset('img/help/TicketsSoporte.png')}}" class="card-img-bottom" alt="inicio">
    </div>
    <div class="accordion" id="accordionExample4">
      <div class="card">
        <div class="card-header" id="headingO">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseO" aria-expanded="true" aria-controls="collapseO">
              Tickets
            </button>
          </h2>
        </div>
        <div id="collapseO" class="collapse" aria-labelledby="headingO" data-parent="#accordionExample4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tickets</h5>
                    <p class="card-text">Esta opción nos ayudará a administrar los tickets de las incidencias..</p>
                    <img src="{{asset('img/help/TicketsSoporte1.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Agregar Tickets</h5>
                    <p class="card-text">Esta opción nos ayudará a administrar los tickets de las incidencias.</p>
                    <img src="{{asset('img/help/agregarticket.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Ver Tickets</h5>
                    <p class="card-text">Esta opción nos ayudará a administrar los tickets de las incidencias. Es importante saber que los tickets solo se podrá actualizar si eres el que creo ese ticket.</p>
                    <p class="card-text">Además podremos ingresar comentarios y responder a estos.</p>
                    <img src="{{asset('img/help/verticket.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Editar Ticket</h5>
                    <p class="card-text">Esta opción nos permitira editar e insertar archivos no menor a 50 KB.</p>
                    <img src="{{asset('img/help/EditarTicket.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Descargar PDF</h5>
                    <p class="card-text">Esta opción nos ayudará a administrar los tickets de las incidencias.</p>
                    <img src="{{asset('img/help/pdf.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Exportar a Excel</h5>
                    <p class="card-text">Esta opción nos ayudará a exportar nuestro registro .</p>
                    <img src="{{asset('img/help/exporexcel.png')}}" class="card-img-bottom" alt="inicio">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
