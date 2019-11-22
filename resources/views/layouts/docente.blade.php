<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>DOCENTE</title>
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
          <img src="#" alt="">Jimmy Erick
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
    <a href="index3.html" class="brand-link">
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
          <a href="#" class="d-block"><strong>Valer Quispe,<br> Jimmy Erick</strong></a>
          <a style="color:rgb(212, 192, 187);"> Docente</a> <br>
          <a style="color:rgb(212, 192, 187);"> <strong>I.E Rosario</strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                <router-link to="/EjercicioLima" class="nav-link borrar">
                        <i class="fas fa-home"></i>
                        <p>&nbsp;&nbsp; INICIO </p>
                    </router-link>
                </li>
                
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-vr-cardboard"></i>
                    <p>AULA VIRTUAL<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fas fa-clipboard"></i>
                            <p>Unidades</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>Sesiones</p>
                        </router-link>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>SCALE Regional<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fab fa-cuttlefish"></i>
                            <p>Monitoreo</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>Historico</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-check"></i>
                            <p>Solicitar Cambio</p>
                        </router-link>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-id-badge"></i>
                    <p>Solicitar Cambio de Correo<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                            <i class="nav-icon fab fa-cuttlefish"></i>
                            <p>Monitoreo</p>
                        </router-link>
                    </li>
                    
                    
                </ul>
            </li>

            
            <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>

                        <p>Cerrar Sesion</p>
                    </a>
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="cajonBorrar2">
          <template-docente></template-docente>
        </div>

        <router-view>

        </router-view>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      DGP
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="http://www.dreapurimac.gob.pe/inicio/">Dirección Regional de Educación</a>.</strong> Todos los Derechos Reservados.
  </footer>
</div>
<!-- ./wrapper -->
{{-- <script src="/js/app.js"></script> --}}
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

<script>
    $('.borrar').on('click',function(){
        $('.cajonBorrar2').css('display','none');
    })
</script>

</body>
</html>
