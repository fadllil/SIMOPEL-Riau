
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/dist/css/adminlte.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="<?=url('/')?>/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="row" style="background-color: white; border-radius: 25px; padding-left: 15px; padding-right: 15px">
    <img src="<?=url('/')?>/img/Riau.png" alt="" style=" margin-top: 10px; margin-bottom: 10px">

    <img src="<?=url('/')?>/img/the_homeland_of_melayu.png" alt="" style=" margin-top: 10px; margin-bottom: 10px">
    <img src="<?=url('/')?>/img/Riau_go_it.jpg" alt="" style=" margin-top: 10px; margin-bottom: 10px">

    <img src="<?=url('/')?>/img/logo_dishub.png" alt="" style=" margin-top: 10px; margin-bottom: 10px">

</div>
<div class="row" style="padding-right: 15px; padding-left: 15px">
    <h1 href="">Sistem Informasi Manajemen Operasional Pelabuhan</h1>
</div>
<div class="login-box">
    <div class="login-logo">
        <a href="<?=url('/')?>/login"><b>SIMOPEL</b>-Riau</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Selamat Datang. Silahkan isi username dan password anda</p>

                <div class="col-md-12">
                    @if ($message = Session::get('succes'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('alert'))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('warning'))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('info'))
                        <div class="alert alert-info alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Please check the form below for errors
                        </div>
                    @endif
                </div>

            <form action="<?=url('/')?>/doLogin" method="post">
                {{csrf_field()}}
                <div class="input-group mb-3">
                    <input name="username" type="text" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<div class="row" style="padding-left: 15px; padding-right: 15px">
    <h5 href="">Keselamatan dan Pelayanan Prima merupakan Prioritas Kinerja Kami
        dinas perhubungan provinsi riau
    </h5>
</div>
<div class="row" style="padding-left: 15px; padding-right: 15px">
    <h5>
        Email : <a href="https://dinasperhubungan@riau.go.id">dinasperhubungan@riau.go.id</a>
        Webside : <a href="https://www.dishub.riau.go.id">www.dishub.riau.go.id</a>
    </h5>
</div>

<!-- jQuery -->
<script src="<?=url('/')?>/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=url('/')?>/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=url('/')?>/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>
