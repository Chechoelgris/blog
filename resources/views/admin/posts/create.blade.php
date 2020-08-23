@extends('admin.layouts.app')

@section('header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
  <li class="breadcrumb-item active"><a href="{{ route('admin') }}">Publicaciones</a></li>
  <li class="breadcrumb-item active">Nuevo</li>
</ol>
@endsection

@section('titlenav')
   Publicaciones
@endsection

@section('title')
    <i class="fas fa-list pr-1"></i> Nueva Publicaciones
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

  
    
@endsection