@extends('admin.layouts.app')

@section('header')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item text-nav-dark-mode"><a href="{{ route('admin') }}">Inicio</a></li>
    <li class="breadcrumb-item ">Posts</li>
  </ol>
@endsection

@section('meta-title')
   Publicaciones
@endsection

@section('title')
  <h1 class="text-light">
    <i class="fas fa-list pr-1"></i> Resumen de Publicaciones
  </h1>
@endsection

@section('content')

  {{-- <div class="card bg-seagreen">
      <div class="card-header text-light" >
        <h3 class="card-title " >Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body text-dark bg-light">
        Algo importante y de valor deberia ir aqui!
      </div>
      <!-- /.card-body -->
      <div class="card-footer text-light">
        algun mensaje cariñoso
      </div>
      <!-- /.card-footer-->
  </div> --}}

  <div class="card bg-seagreen">
    <div class="card-header text-light">
      <h3 class="card-title ">Listado de Publicaciónes</h3>
      
      <div class="card-tools">
        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#crearPublicacionModal">Crear Publicación</button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button> --}}
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body bg-light">
      <table id="posts-table" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Extracto</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->excerpt }}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-info bg-seagreen text-light"><i class="fas fa-pen"></i></a>
                  <a href="#" class="btn btn-sm btn-info"><i class="fas fa-times"></i></a>

                </td>
            </tr>
              
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ mix('css/datatables.css') }}">

@endpush

@push('scripts')

  <script src="{{ mix('js/admin-datatable-script.js') }}"></script>

  

 
@endpush