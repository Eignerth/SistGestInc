<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sist. Gest. Incidencias | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Gestión de Incidencias</b>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia Sesión</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" max="50" name="user" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
                <i class="fas fa-user"></i></span>
            </div>
          </div>
        </div>
        @error('user')
            <div class="invalid-feedback"> {{$message}} </div>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <div class="invalid-feedback"> {{$message}} </div>
        @enderror
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary ">Iniciar</button>
        </div>
      </form>
    </div>

  </div>
</div>


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
</html>
