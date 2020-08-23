@extends('admin.layouts.app')

@section('header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
  <li class="breadcrumb-item active">Posts</li>
</ol>
@endsection

@section('titlenav')
   Publicaciones
@endsection

@section('title')
    <i class="fas fa-list pr-1"></i> Resumen de Publicaciones
@endsection

@section('content')

  <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        Algo importante y de valor deberia ir aqui!
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        algun mensaje cariñoso
      </div>
      <!-- /.card-footer-->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Listado de Publicaciónes</h3>
      
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
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
                <td>{{ $post->extract }}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
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