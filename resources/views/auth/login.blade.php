{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


{{-- SEPARACION --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - Reciclaap</title>
    {!!Html::style('../vendor/tcg/voyager/publishable/assets/lib/css/bootstrap.min.css')!!}
    {!!Html::style('../vendor/tcg/voyager/publishable/assets/lib/css/animate.min.css')!!}
    {!!Html::style('../vendor/tcg/voyager/publishable/assets/css/login.css')!!}

    <style>
        body {
            background-image:url('../vendor/imagenReciclaap/settings/June2017/crdTg7CUs8yTVJS6JeNL.jpg');
            background-color: #FFFFFF;
        }
        .login-sidebar:after {
            background: linear-gradient(-135deg, #ffffff, #ffffff);
            background: -webkit-linear-gradient(-135deg, #ffffff, #ffffff);
        }
        .login-button, .bar:before, .bar:after{
            background:#22A7F0;
        }

    </style>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Designed with ♥ by Frondor -->
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-8 col-md-9">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    
                    @if(Session::has('error'))
                        <br>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error:</strong> {{Session::get('error')}}
                        </div>

                    @endif

                    <div class="logo-title-container">
                        <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="../vendor/imagenReciclaap/settings/June2017/DlBPPOlTybI1OEgEIEhA.png" alt="Logo Icon">
                                                <div class="copy animated fadeIn">
                            <h1>Reciclapp</h1>
                            <p>Centro de Control</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3 login-sidebar animated fadeInRightBig">

            <div class="login-container animated fadeInRightBig">

                <h2>Inicie Sesión:</h2>

        {{ Form::open(array('url' => '/login')) }}
                
           
                <div class="group">      
                  <input type="text" name="email" value="" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-user"></i><span class="span-input"> Correo</span></label>
                </div>

                <div class="group">      
                  <input type="password" name="password" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-lock"></i><span class="span-input"> Contraseña</span></label>
                </div>

                <button type="submit" class="btn btn-block login-button" >
                    <span class="signingin hidden"><span class="glyphicon glyphicon-refresh"></span> Iniciando...</span>
                    <span class="signin">Iniciar sesión</span>
                </button>
               
        {{ Form::close() }}

              
            </div> <!-- .login-container -->
            
        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
</script>
</body>
</html>