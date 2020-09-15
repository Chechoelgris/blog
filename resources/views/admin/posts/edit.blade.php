@extends('admin.layouts.app')

@section('header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
  <li class="breadcrumb-item active"><a href="{{ route('admin') }}">Publicaciones</a></li>
  <li class="breadcrumb-item active">Nueva</li>
</ol>
@endsection

@section('meta-title')
   Nueva Publicación
@endsection



@section('title')
  <h1 class="text-light">
    <i class="fas fa-list pr-1"></i> Nueva Publicación
    {{-- <p>{{ $post->published_at->format('d/m/Y') }}</p> --}}
  </h1>
    

@endsection

@section('content')
  
  <form method="POST" action="{{ route('admin.post.update', $post) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    
    <div class="row ">
      <div class="col-md-8">
        <div class="card bg-dark ">
          
          <div class="card-body  ">
  
            <div class="form-group ">
              <label class="{{ $errors->has('title') ? 'text-danger' : 'text-seagreen' }}" for="title ">Título de la publicación</label>
              <input class="form-control {{ $errors->has('title') ? 'border border-danger border-3' : '' }}" 
              value="{{ old('title', $post->title) }}"
              type="text" 
              name="title" 
              id="title-post-input" 
              placeholder="Ingresa un título para la publicación">

              {!!  $errors->first('title', '<span class="help-block text-danger">:message</span>') !!}
              
            </div>

            <div class="form-group">
              <label class="{{ $errors->has('body') ? 'text-danger' : 'text-seagreen' }}" for="body ">Contenido de la publicación</label>
              <textarea id="summernote" name="body">{{ old('body', $post->body) }}</textarea>  
              {!!  $errors->first('body', '<span class="help-block text-danger">:message</span>') !!}
            </div>
            
          </div>
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark">
          <div class="card-body">
  
            <div class="form-group">
              
              <label class="{{ $errors->has('published_at') ? 'text-danger' : 'text-seagreen' }}" for="reservationdate">Fecha de creación</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" 
                    class="form-control datetimepicker-input" 
                    name="published_at"
                    data-target="#reservationdate" 
                    placeholder="Selecciona una fecha"
                    value="{{ old('published_at', $post->published_at ? $post->published_at->format('d-m-Y') : null) }}"/>
                    
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label class="{{ $errors->has('category') ? 'text-danger' : 'text-seagreen' }}" for="category">Categorias</label>
              <select class="form-control {{ $errors->has('category') ? 'border border-danger border-3' : '' }}" 
                id="category" 
                name="category" 
                >
                <option value="">Selecciona una Categoría</option>
                
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}
                      >{{ $category->name }}</option>
                @endforeach
              </select>
              {!!  $errors->first('category', '<span class="help-block text-danger">:message</span>') !!}
            </div>
            
            <div class="form-group">

              <label class="{{ $errors->has('tags') ? 'text-danger' : 'text-seagreen' }}" for="tags">
                Etiquetas
              </label>

              <select multiple="multiple" class="form-control" id="tags" name="tags[]" style="max-width: 100%"
              placeholder="Selecciona una Etiqueta">
                @foreach ($tags as $tag)
                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
              </select>
            </div>
            
  
            <div class="form-group">
              <label class="{{ $errors->has('excerpt') ? 'text-danger' : 'text-seagreen' }}" for="excerpt-post-input">Extracto</label>
              <textarea class="{{ $errors->has('excerpt') ? 'border border-danger border-3' : '' }} form-control" 
                name="excerpt" 
                id="excerpt-post-input" 
                rows="2" 
                placeholder="Ingresa un extracto o resumen para la publicación">{{ old('excerpt',$post->excerpt) }}</textarea>
              {!!  $errors->first('excerpt', '<span class="help-block text-danger">:message</span>') !!}

            </div>
           
            <div class="form-group">
              <label class="text-seagreen">Imágenes</label>
              <div class="dropzone"></div>
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block bg-seagreen">Guardar Publicación</button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </form>

  
    
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ mix('css/datatables.css') }}">
  <link rel="stylesheet" href="{{ mix('css/tempusdominus.css') }}">
  <link rel="stylesheet" href="{{ mix('css/summernote.css') }}">
  <link rel="stylesheet" href="{{ mix('css/select2.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css">
@endpush

@push('scripts')

<script src="{{ mix('js/admin-summernote-script.js') }}"></script>
<script src="{{ mix('js/admin-datepicker-script.js') }}"></script>
<script src="{{ mix('js/admin-select2-script.js') }}"></script>
<script src="{{ mix('js/admin-datatable-script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
<script>
  var myDropzone = new Dropzone('.dropzone',{
    headers:{
      'X-CSRF-TOKEN': "{{ csrf_token() }}",
    },
   url : '/admin/posts/{{ $post->slug }}/photos',
   acceptedFiles: "image/*",
   maxFilesize: 2,
   paramName: "photo",
   dictDefaultMessage: 'Arrastra las imagenes aquí para subirlas',
});

myDropzone.on('error', function (file, res){
  var msg = res.errors.photo[0];
  $('.dz-error-message:last > span').text(msg);
  
 

});
</script>
<script src="{{ mix('js/admin-dropzone-script.js') }}"></script>

@endpush