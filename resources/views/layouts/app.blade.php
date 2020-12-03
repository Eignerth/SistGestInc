<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style TYPE="text/css">
       #box-search{
        list-style-type:none;
        margin:0;
        padding:0;
        position: fixed;
        display: block;
        margin-left:45px;
        margin-top: 100px;
        background-color: rgba(255,255,255,0.5);
        width: 200px;
        display: none;
      }
    </style>
  <title>S2U @yield('tittle')</title>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
<<<<<<< Updated upstream
  @yield('css')
=======
  <link rel="stylesheet" href="{{asset('css/app.js')}}">
  <script type="text/javascript">
  </script>
>>>>>>> Stashed changes
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  {{-- Navbar --}}
  <nav class="main-header navbar navbar-expand navbar-dark ">
    {{-- Left navbar links --}}
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    {{-- SEARCH FORM --}}
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
<<<<<<< Updated upstream
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
=======
        <input id="inputSearch" class="form-control form-control-navbar" type="text" placeholder="Search"  autocomplete="off">
>>>>>>> Stashed changes
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" >
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
<<<<<<< Updated upstream
    <div class="ml-auto">
      <h5 class="align-middle">
        {{-- Bienvenid@ {{auth()->user()->personal->name}} --}}
        
      </h5>
    </div>
=======
    <ul id="box-search">
      <li><a href="#">asdf</a></li>
      <li><a href="{{route('empresa.index')}}">Empresa</a></li>
      <li><a href="#">Ticket</a></li>
      <li><a href="#">Administración</a></li>
      <li><a href="#">Informes</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="{{route('empresa.index')}}">leonardo</a></li>
      <li><a href="#">eignerth</a></li>
      <li><a href="#">paredes</a></li>
      <li><a href="#">alvaro</a></li>
      <li><a href="#">jesus</a></li>
      <li><a href="{{route('empresa.index')}}">gaaaaaa</a></li>
      <li><a href="#">dthgfss</a></li>
      <li><a href="#">sgfhdjd</a></li>
      <li><a href="#">dhyhdgd</a></li>
      

    </ul>
    
>>>>>>> Stashed changes

    {{-- Right navbar links --}}
    <ul class="navbar-nav ml-auto">

      {{-- Notifications Dropdown Menu --}}
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell fa-2x"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

    </ul>
  </nav>
  {{-- /.navbar --}}

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">S2U</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="buscar">
      {{-- Sidebar Menu --}}
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @can('Dashboard')
          <li class="nav-item active">
            <a href="{{route('dashboard')}}" class="nav-link {{active('dashboard')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          @endcan
          @can('Soporte')            
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link {{active('soporte/*')}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Soporte
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: {{block('soporte/*')}};">
              @can('Soporte - Tickets')
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{active('soporte/*')}}">
                  <i class="nav-icon fas fa-ticket-alt"></i>
                  <p>
                    Tickets
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: {{block('soporte/*')}};">
                  @can('Ver Tickets - Generales')                  
                  <li class="nav-item">
                    <a href="{{route('tickets-support.index')}}" class="nav-link {{active('soporte/tickets')}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  @endcan
                  @can('Ver Mis Tickets')
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Mis Tickets</p>
                    </a>
                  </li>
                  @endcan                  
                </ul>
              </li>
              @endcan              
            </ul>
          </li>
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Calidad
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Tickets
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Mis Tickets</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
            </ul>
          </li> --}}
          @endcan
          @can('Actividades')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Llamadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reuniones</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('KB')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-atlas"></i>
              <p>
                KB
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Equipo
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          {{--Clientes--}}
          @can('Clientes')
          <li class="nav-item has-treeview">
            <a href="{{route('clientes')}}" class="nav-link {{active('clientes/*')}}">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display:{{block('clientes/*')}};">
              @can('Ver Contactos')
              <li class="nav-item" >
                <a href="{{route('contactos.index')}}" class="nav-link {{active('clientes/contactos')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              @endcan
              @can('Ver Soporte de Clientes')
              <li class="nav-item">
                <a href="{{route('soporte_de_clientes.index')}}" class="nav-link {{active('clientes/soporte_de_clientes')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Soporte de Clientes</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          {{--Informes--}}
          @can('Informes')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Informes
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          @endcan
          {{--Menu Administracion--}}
          @can('Administración')
          <li class="nav-item has-treeview">
            <a href="{{route('administracion')}}" class="nav-link {{active('administracion/*')}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display:{{block('administracion/*')}};">
              @can('Ver Empresa')
                <li class="nav-item">
                  <a href="{{route('empresa.index')}}" class="nav-link {{active('administracion/empresa')}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Empresa</p>
                  </a>
                </li>
              @endcan
              @can('Ver Área-Cargo')
              <li class="nav-item">
                <a href="{{route('area_cargo.index')}}" class="nav-link {{active('administracion/area_cargo')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Áreas y Cargos</p>
                </a>
              </li>
              @endcan
              @can('Ver Rol')
              <li class="nav-item">
                <a href="{{route('rol_permiso.index')}}" class="nav-link {{active('administracion/rol_permiso')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles y Permisos</p>
                </a>
              </li>
              @endcan
              @can('Ver Personal')
              <li class="nav-item">
                <a href="{{route('personal.index')}}" class="nav-link {{active('administracion/personal')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>                
              @endcan
              @can('Ver Producto')
              <li class="nav-item">
                <a href="{{route('productos.index')}}" class="nav-link {{active('administracion/productos')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Producto y/o Servicio</p>
                </a>
              </li>
              @endcan
              @can('Ver Usuario')
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link {{active('administracion/usuarios')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @can('Perfil')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Perfil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos Personales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bitácora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actividades Recientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambiar Contraseña</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('Mantenimiento de Tablas')
          {{--Menu Mantenimiento de datos--}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{active('mantenimiento/*')}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Mantenimiento - Tablas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display:{{block('mantenimiento/*')}};">
              @can('Ver Docs Identidad')
              <li class="nav-item">
                <a href="{{route('docidentidad.index')}}" class="nav-link {{active('mantenimiento/docidentidad')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo Docs. Identidad</p>
                </a>
              </li>
              @endcan
              @can('Ver Canales de Atención')
              <li class="nav-item">
                <a href="{{route('canales_atencion.index')}}" class="nav-link {{active('mantenimiento/canales_atencion')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Canales de Atención</p>
                </a>
              </li>
              @endcan
              @can('Ver Clasif. Inc.')
                
              <li class="nav-item">
                <a href="{{route('clasificacion_inc.index')}}" class="nav-link {{active('mantenimiento/clasificacion_inc')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clasificación de INC</p>
                </a>
              </li>
              @endcan
              @can('Ver Estado de Prioridad')
              <li class="nav-item">
                <a href="{{route('estado_de_prioridad.index')}}" class="nav-link {{active('mantenimiento/estado_de_prioridad')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de Prioridad</p>
                </a>
              </li>
              @endcan
              @can('Ver Control de Series')
              <li class="nav-item">
                <a href="{{route('control_de_serie.index')}}" class="nav-link {{active('mantenimiento/control_de_serie')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Control de Series</p>
                </a>
              </li>
              @endcan
              @can('Ver Estado de Avance')
              <li class="nav-item">
                <a href="{{route('estado_de_avance.index')}}" class="nav-link {{active('mantenimiento/estado_de_avance')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estados de Avance</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<<<<<<< Updated upstream


=======
  
  <!-- Content Wrapper. Contains page content -->
>>>>>>> Stashed changes
  <div class="content-wrapper">
    {{--Contenido - Cabezera--}}
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              @yield('tittlePage')
            </div>
            {{--BreadCrumb--}}
            <div class="col-sm-6">
              @yield('breadcrumb')
            </div>
            {{--Fin de BreadCrumb--}}
          </div>
        </div>
      </div>
    {{--Fin de Contenido - Cabezera--}}

    {{--Contenido Principal --}}
    <div class="content">
      <div class="container-fluid">          
        @yield('content')
      </div>
    </div>
    {{--Fin de Contenido Principal--}}

    
  </div>

  <footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>

{{--Modal Logout--}}
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Cerrar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>          
      <form action="{{route('logout')}}" method="POST">
          @csrf
          <div class="modal-body">
              Se perderán todos los datos no guardados.
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-danger">Cerrar</button>
          </div>
      </form>
  </div>
  </div>
</div>

  @livewireScripts
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  @yield('js')

</body>
</html>