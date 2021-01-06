<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SistGesInc @yield('tittle')</title>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @yield('css')
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


    {{-- Right navbar links --}}
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <i class="far fa-user-circle fa-2x"></i>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{asset('img/default-profile.png')}}" class="img-circle" alt="User Image">
            <p>
              {{auth()->user()->personal->name}}
              <small>Creado {{auth()->user()->created_at->diffForHumans()}}</small>
              <small>Últ. Acceso: <strong>{{auth()->user()->lastactivity}}</strong></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-default btn-flat">
                  <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
                </button>
              </form>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  {{-- /.navbar --}}

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://portal.gestinc.ga/dashboard" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">SistGesInc</span>
    </a>

  
    <div class="sidebar">     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item active">
            <a href="{{route('dashboard')}}" class="nav-link {{active('dashboard')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
         
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
              @can('Ver Soporte - Tickets')
              <li class="nav-item">
                <a href="{{route('tickets-support.index')}}" class="nav-link {{active('soporte/*')}}">
                  <i class="nav-icon fas fa-ticket-alt"></i>
                  <p>Tickets</p>
                </a>
              </li>
              @endcan              
            </ul>
          </li>         
          @endcan         
          @can('KB')
          <li class="nav-item">
            <a href="{{route('base-conocimiento.index')}}" class="nav-link" class="nav-link {{active('kb/*')}}">
              <i class="nav-icon fas fa-atlas"></i>
              <p>
                KB                
              </p>
            </a>
          </li>
          @endcan
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
          <li class="nav-item">
            <a href="{{route('ayuda')}}" class="nav-link {{active('ayuda')}}">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>Ayuda</p>
            </a>
          </li>
          
        </ul>
      </nav>
     
    </div>
    
  </aside>


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
      Sistema de Gestión de Incidencias
    </div>
    <strong>Copyright &copy; 2020-2020 <a href="http://portal.gestinc.ga/login">SistGesInc</a>.</strong> All rights reserved.
  </footer>
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