<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script data-require="chart.js@*" data-semver="1.0.2" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>DIRECTOR</title>
  <meta name="csrf-token" value="{{ csrf_token() }}" />
{{-- <link rel="stylesheet" href="/css/app.css"> --}}
<link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
{{-- <script src="/js/app.js"></script> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" @keyup.enter="searchit" v-model="search" type="search" placeholder="Buscar" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" @click="searchit">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>

          <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
          <img src="#" alt="">Jose Antonio
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:;"><i class="fas fa-user"></i> &nbsp Perfil</a>
          <a class="dropdown-item" href="javascript:;"> <i class="fas fa-edit"></i>&nbsp Editar Datos</a>
          
          <a class="dropdown-item" href="javascript:;"><i class="fas fa-clipboard-check"></i> &nbsp Manual</a>
          <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out-alt"></i> &nbsp Cerrar Sesión</a>
          </div>
          </li>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3" class="brand-link">
      <img src="{{asset('img/dre.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIREA - DREA</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/carne.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info">
          <a href="#" class="d-block">Bienvenido,</a>
          <a href="#" class="d-block"><strong>RAMOS SAAVEDRA,<br> Jose Antonio</strong></a>
          <a style="color:rgb(212, 192, 187);"> Director</a> <br>
          <a style="color:rgb(212, 192, 187);"> <strong>I.E Santa Teresita</strong></a>
        </div>
      </div>
   
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                    <router-link to="/Inicio" class="nav-link borrar">
                        <i class="fas fa-tachometer-alt nav-icon blue"></i>
                        <p>INICIO</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/EjercicioLima" class="nav-link borrar">
                        <i class="fas fa-vr-cardboard"></i>
                        <p>&nbsp;&nbsp;AULA VIRTUAL</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/asignarEncargado" class="nav-link borrar">
                        <i class="fas fa-tachometer-alt nav-icon blue"></i>
                        <p>ASIGNAR ENCARGADO</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>REPOSITORIO<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/gestionArchivos" class="nav-link borrar">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Gestion de archivo(I.E.)</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Gestion archivos(Docente)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Gestion de carpetas</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>Solicitar cambio</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <router-link to="/dashboard" class="nav-link">
                        <i class="fas fa-folder-open"></i>
                        <p>&nbsp;&nbsp;SIREMAP</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/developer" class="nav-link">
                        <i class="fas fa-toolbox"></i>
                        <p>&nbsp;&nbsp;SINIERA</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                        <i class="fas fa-university"></i>
                        <p>&nbsp;&nbsp;SIERA</p>
                    </router-link>
                </li>
                <li class="nav-item">
                        <router-link to="/profile" class="nav-link">
                            <i class="fas fa-chart-line"></i>
                            <p>&nbsp;&nbsp;SCALE REGIONAL</p>
                        </router-link>
                    </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>

                        <p>Cerrar Sesion</p>
                    </a>
                </li> --}}
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="cajonBorrar">
            <template-director></template-director>
        </div>
        <router-view>
                
        </router-view>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Apurimac-abancay
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">DREA</a>.</strong> La educacion es lo primero.
  </footer>
</div>
<!-- ./wrapper -->
{{-- <script src="/js/app.js"></script> --}}
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script>
    $('.borrar').on('click',function(){
        $('.cajonBorrar').css('display','none');
    })
</script>
</body>
</html>
