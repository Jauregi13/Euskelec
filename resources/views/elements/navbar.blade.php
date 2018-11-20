<div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" src="img/logo.png"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#euskelec">¿Qué es Euskelec?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="#" data-toggle="modal" data-target="#registro">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#inicio">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
</div>


<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario de Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="d-flex flex-column">
          <div class="form-group">
            <label class="col-form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="inicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="d-flex flex-column">
          <div class="form-group">
            <label class="col-form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
          </div>
          <div class="form-group">
            <label class="col-form-label">Correo electrónico: </label>
            <input type="email" name="email" id="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" oninput="validarEmail()">
            <div id="validacion"></div>
          </div>
          <div class="form-group">
            <label class="col-form-label">Teléfono: </label>
            <input type="tel" name="tel" id="tel" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" oninput="validarTelf()">
            <div id="validacionTelf"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Entrar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
  function validarEmail() {
    
    let email = document.getElementById('email').value;

    if(email == null || email == ''){
      document.getElementById('validacion').innerHTML="No has introducido el email";
    }

    let dividirEmail = email.split('');

      if(email.includes('@') && email.includes('.') && email.length > 2 && email.indexOf("@") == email.lastIndexOf("@") && email.indexOf("@") < email.lastIndexOf('.') &&  email.lastIndexOf('.')+2 < email.length && email.lastIndexOf('.')+7 > email.length){


          document.getElementById('validacion').innerHTML="correo valido";
          document.getElementById('enviar').disabled= false;
      }
      else {
        document.getElementById('validacion').innerHTML="correo no valido";
        document.getElementById('enviar').disabled= true;
      }
    


  }

  function validarTelf() {
    
    let telefono = document.getElementById('tel').value;

    let quitarEspacios= telefono.split(' ');

    let unirNum = quitarEspacios.join('');

    if(unirNum.length == 9){
        document.getElementById('validacionTelf').innerHTML="teléfono valido";
        document.getElementById('enviar').disabled= false;
    }
    else {
        document.getElementById('validacionTelf').innerHTML="teléfono no valido";
        document.getElementById('enviar').disabled= true;
    }

  }


</script>
