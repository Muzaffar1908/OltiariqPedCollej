<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- GetBootsrtapp -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/fa/css/all.min.css')}}" /> --}}

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  {{-- sweet alert  --}}
   <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

            <!-- Navbar Search -->
      <div class="nav-item">
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li>
                      <a class="dropdown-item" href="{{ route('admin.profile') }}">
                          Profil
                      </a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                          Chiqish
                      </a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </ul>
          </div>
      </div>
      <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>

      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin.profile')}}" class="d-block">  {{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  <a href="{{route('admin.index')}}" class="nav-link @php echo Request::getRequestUri() == '/admin'? 'active':'' @endphp">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                      Dashboard
                      
                  </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{route('admin.slider.index')}}"  class="nav-link
                  @if(Str::substr(Request::getRequestUri(), 0,13) == '/admin/slider')
                    active
                    @endif
                  ">
                  <i class="nav-icon bi bi-sliders"></i>
                      <p>
                          Slider
                      </p>
                  </i>
                </a>
              </li>

              <li class="nav-item">
                    <a href="{{route('admin.news.index')}}"  class="nav-link
                    @if(Str::substr(Request::getRequestUri(), 0,11) == '/admin/news')
                      active
                      @endif
                    ">
                    <i class="nav-icon bi bi-newspaper"></i>
                        <p>
                            News
                        </p>
                    </i>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{route('admin.about.index')}}"  class="nav-link
                    @if(Str::substr(Request::getRequestUri(), 0,12) == '/admin/about')
                      active
                      @endif
                    ">
                    <i class="nav-icon bi bi-person-badge"></i>
                        <p>
                            About
                        </p>
                    </i>
                  </a>
               </li>

               <li class="nav-item">
                  <a href="{{route('admin.contact.index')}}"  class="nav-link
                    @if(Str::substr(Request::getRequestUri(), 0,14) == '/admin/contact')
                      active
                      @endif
                    ">
                    <i class="nav-icon bi bi-person-rolodex"></i>
                        <p>
                            Contact
                        </p>
                    </i>
                  </a>
               </li>

              <li class="nav-item">
                <a href="{{route('admin.photo.index')}}"  class="nav-link
                    @if(Str::substr(Request::getRequestUri(), 0,12) == '/admin/photo')
                      active
                      @endif
                    ">
                    <i class="nav-icon bi bi-images"></i>
                        <p>
                            Photo
                        </p>
                    </i>
                  </a>
              </li>

               <li class="nav-item">
                  <a href="{{route('admin.result.index')}}"  class="nav-link
                    @if(Str::substr(Request::getRequestUri(), 0,13) == '/admin/result')
                      active
                      @endif
                    ">
                    <i class="nav-icon bi bi-bar-chart"></i>
                        <p>
                            Results
                        </p>
                    </i>
                  </a>
                </li>

                 <li class="nav-item">
                    <a href="{{route('admin.link.index')}}"  class="nav-link
                      @if(Str::substr(Request::getRequestUri(), 0,11) == '/admin/link')
                        active
                        @endif
                      ">
                      <i class="nav-icon bi bi-folder-symlink"></i>
                          <p>
                              Links
                          </p>
                      </i>
                    </a>
               </li>

               <li class="nav-item  
                @if((Str::substr(Request::getRequestUri(), 0,18) == '/admin/textsetting') || (Str::substr(Request::getRequestUri(), 0,18) == '/admin/socialmedia' ))
                 menu-open
                @endif
               ">
                <a href="#" class="nav-link 
                @if((Str::substr(Request::getRequestUri(), 0,18) == '/admin/textsetting') || (Str::substr(Request::getRequestUri(), 0,18) == '/admin/socialmedia' ))
                 active
                 @endif

                ">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                      <li class="nav-item">
                        <a href="{{route('admin.textsetting.index')}}" class="nav-link
                          @if((Str::substr(Request::getRequestUri(), 0,18) == '/admin/textsetting'))
                          active
                          @endif
                        ">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Text Setting</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{route('admin.socialmedia.index')}}" class="nav-link
                        @if(Str::substr(Request::getRequestUri(), 0,18) == '/admin/socialmedia')
                           active
                        @endif
                        ">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Social Media</p>
                        </a>
                      </li>
                 </ul>
              </li>
                    

                <li class="nav-item">
                  <a href="/" class="nav-link">
                      <i class="nav-icon bi bi-arrow-left-short"></i>
                      <p>
                          Back
                      </p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script> 
<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
{{-- sweet alert --}}
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@if(session()->has('message'))
<script>
          Swal.fire({
            title: 'Done!',
            text: '{{session('message')}}',
            icon: 'success',
            confirmButtonText: 'Ok'
        })
</script>
@endif
<script>
  $(function () {
    // Summernote
    $('#summernote1').summernote()
    $('#summernote2').summernote()
    $('#summernote3').summernote()
  })
</script>
@yield('script')
</body>
</html>
