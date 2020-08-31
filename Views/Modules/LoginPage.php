<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

   <!-- <img src="Views/img/Plantilla/default.png" alt="MMLogo"> -->

   <img src="Views/img/Plantilla/MMueblesLogo1.png" class="img-responsive" style="margin: 0 auto" alt="MMLogo">

   <!-- <img src="Views/img/Plantilla/cover.png" alt="MMLogo"> -->

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg"> Ingresar al sistema </p>

    <form  method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="UsuarioIngresado" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ContraseñaIngresada" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
    
      </div>
      
        <?php
           
           $login = new ControladorUsuarios();
           $login -> ctrIngresoUsuario();

        ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->