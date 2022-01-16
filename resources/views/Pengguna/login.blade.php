<!DOCTYPE html>
<div class="container">
  <html class="contain" lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PJB | Log in</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  </head>


  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <div class="banner ">
          <h4>SELAMAT DATANG DI WEB PJB MUARA TAWAR </h4>
        </div>
        <a href="#"><b></b></a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg"></p>
          <form action="{{route('postlogin')}}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="NID" class="form-control" name="NID" placeholder="NID">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-badge"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="col-5 m-auto">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
        </form>
        <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
      </div>
    </div>
  </body>


  </html>
</div>










<!-- <!DOCTYPE html>
<div class="container">
  <html class="contain" lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PJB | Log in</title>
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <div>WEB<span>PT.PJB</span></div>
      </div>
      <br>
      <div class="card">
        <div class="card- body login-card-body">
          <p class="login-box-msg"></p>
          <form action="{{route('postlogin')}}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="NID" placeholder="Masukkan NID">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-badge"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Masukkan password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="col-5 m-auto">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
      </div>
    </div>
  </body>

  </html> -->