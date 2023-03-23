<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary borde-arriba-guinda">
    <div class="card-header text-center">
      <a href="inicio" class="h1"><img src="vistas/img/logo-esiqie-rs.png" alt="" width="150"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa con usuario y contraseña</p>

      <form action="inicio" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mt-2">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block color-guinda">Iniciar Sesión</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Recordar contraseña
                </label>
              </div>
            </div>
          <!-- /.col -->
        </div>
        <?php 
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();
        ?>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Recuperar Contraseña</a>
      </p>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->