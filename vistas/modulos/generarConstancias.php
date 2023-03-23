<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sección Constancias</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Nueva Constancia</a></li>
            <li class="breadcrumb-item active">Top Navigation</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-10">
          <!-- Aquí va la información -->
          <iframe src="extras\pdf\formatoConstancia_Cursando.php" title="iframe Example 1" width="950" height="600">
            <p>Your browser does not support it.</p>
          </iframe>
        </div>
        <div class="col-1">
          <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
            <!-- <button type="button" class="btn btn-danger"><i class="bi bi-file-earmark-arrow-up"></i> Generar</button> -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-123"></i> Folio</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Folio: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="text" name="insertaFolio" id="insertaFolio">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Leyendas -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Leyendas
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="bi bi-blockquote-left"></i> Aniversario</a>
                <a class="dropdown-item" href="#"><i class="bi bi-three-dots-vertical"></i> Otros</a>
              </div>
            </div>
            <!-- Logos -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Logotipos
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="bi bi-arrow-bar-down" data-toggle="modal" data-target="#exampleModal"></i> IPN Superior</a>
                <a class="dropdown-item" href="#"><i class="bi bi-arrow-bar-up" data-toggle="modal" data-target="#exampleModal"></i> IPN Inferior</a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div class="container">
        <div class="row">

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>