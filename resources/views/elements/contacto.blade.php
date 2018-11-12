<div class="container">
  <div class="row">
    <div class="col-md-10 col-lg-8 mx-auto text-center">

      <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
      <h2 class="text-white mb-5">Escribe tu comentario</h2>

      <form class="d-flex flex-column" action="comentario" method="post" onsubmit="alert('Comentario insertado Correctamente')">
        @csrf
        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nombre" name="nombre" placeholder="Nombre...">
        <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="email" name="email" placeholder="Correo electronico...">
        <textarea type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="mensaje" name="mensaje" rows="10" placeholder="Escribe tu mensaje..."></textarea> 
        <button type="submit" name="enviar" class="btn btn-primary mx-auto">Enviar</button>
      </form>

    </div>
  </div>
</div>
