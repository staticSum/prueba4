<div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">bs-stepper</h3>
              </div>
              <form>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#generales">
                      <button type="button" class="step-trigger" role="tab" aria-controls="generales-part" id="generales-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Generales</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#direccion">
                      <button type="button" class="step-trigger" role="tab" aria-controls="direccion-part" id="direccion-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Dirección</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#referencias-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="referencias-part" id="referencias-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Referencias M</span>
                      </button>
                    </div>
                  </div>
                    <div class="line"></div>
                    <div class="step" data-target="#estudios">
                      <button type="button" class="step-trigger" role="tab" aria-controls="estudios-part" id="estudios-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Estudios</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#actuales">
                      <button type="button" class="step-trigger" role="tab" aria-controls="actuales-part" id="actuales-part-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Actuales</span>
                      </button>
                    </div>

                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="generales-part" class="content" role="tabpanel" aria-labelledby="generales-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->