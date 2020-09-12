<div class="modal fade" id="crearPublicacionModal" tabindex="-1" aria-labelledby="crearPublicacionModalLabel" aria-hidden="true">
    <form method="POST" action="{{ route('admin.post.store') }}">
      @csrf
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="crearPublicacionModalLabel">Título de la nueva publicación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    
            <div class="form-group ">
              {{-- <label class="{{ $errors->has('title') ? 'text-danger' : 'text-seagreen' }}" for="title ">Título de la publicación</label> --}}
              <input class="form-control {{ $errors->has('title') ? 'border border-danger border-3' : '' }}" 
              value="{{ old('title') }}"
              type="text" 
              name="title" 
              id="title-post-input" 
              placeholder="Ingresa un título para la publicación"
              required>

              {!!  $errors->first('title', '<span class="help-block text-danger">:message</span>') !!}
              
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button  class="btn btn-primary">Crear</button>
          </div>
        </div>
      </div>

    </form>
  </div>