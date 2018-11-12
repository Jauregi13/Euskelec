<div class="container">
  <div class="row">
    <div class="col-md-10 col-lg-8 mx-auto text-center">

      <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
      <h2 class="text-white mb-5">Escribe tu comentario</h2>

      <form class="d-flex flex-column" action="comentario" method="post">
        @csrf
        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nombre" name="nombre" placeholder="Nombre...">
        <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="email" name="email" placeholder="Correo electronico...">
        <textarea type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="mensaje" name="mensaje" rows="10" placeholder="Escribe tu mensaje..."></textarea> 
        <button type="submit" name="enviar" class="btn btn-primary mx-auto">Enviar</button>
      </form>

    </div>
  </div>
</div>

@if(Request::has('enviar'))

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endif

