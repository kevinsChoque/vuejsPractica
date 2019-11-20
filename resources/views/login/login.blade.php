<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>DREA</title>
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>
<div class="wrapper" id="app">
    <div class="login-box">
        <div class="login-logo">
            {{-- <a href="../../index2.html"><b>Admin</b>LTE</a> --}}
        </div>
            <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">DIRECCION REGIONAL DE EDUCACION DE APURIMAC</p>
                <form action="{{url('ingresar')}}" method="post">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-info"><span class="fa fa-envelope"></span></button>
                        </div>
                        <input type="text" class="form-control" name="dni" placeholder="DNI . . .">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-info"><span class="fa fa-lock"></span></button>
                        </div>
                        <input type="text" class="form-control" name="password" placeholder="Contraseña . . .">
                    </div>
                    {{csrf_field()}}
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <p class="mb-1">
                    <a href="#">Olvidé mi contraseña</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>