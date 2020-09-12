<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> {{ env('APP_NAME') }} | @yield('meta-title', 'Administración')</title>
  <meta name="robots" content="noindex" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @stack('styles')
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini ">
  <!-- Site wrapper -->
  <div class="wrapper ">
    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-dark-mode">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              @yield('title', 'Inicio')
            </div>
            <div class="col-sm-6">
              @yield('header')
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        @if (session()->has('flash'))
            <div class="alert alert-success">{{ session('flash') }}</div>
        @endif

        @yield('content')
  
      </section>
      
    </div>
    

    <!-- Footer -->
    @include('admin.layouts.footer')
    <!-- /.footer -->

  </div>

  
  <!-- ./wrapper -->
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  {{-- Inicializar librerias --}}
  @stack('scripts')
  
  @include('admin.posts.create')
  
  
</body>
</html>
