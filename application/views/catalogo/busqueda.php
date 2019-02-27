<div id="content-wrapper">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="page-wrapper">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h5></h5>
                <!-- Lanzar Modal para agregar pieza  -->
                <a href="<?php echo base_url() ?>agregar" class="btn btn-primary" style="border-radius:20px;">Registrar pieza</a>
              </div>
              <div class="card-block">
                <!--<div class="row flex-row-reverse m-0">-->
                  <!--<button class="btn catalogo__btn-primary m-3" (click)="openModal('new')">Registrar pieza</button>-->
                <!--</div>-->
                <div class="catalogo__form">
                  <form class="col-md-12">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="conjunto">Conjunto</label>
                        <select class="form-control form-control-sm" id="conjunto" formControlName="idSet">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-2">
                        <label for="num_procedencia">No. Procedencia</label>
                        <input type="text" class="form-control form-control-sm" id="num_procedencia"
                               formControlName="origin_number">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="num_inventario">No. Inventario</label>
                        <input type="text" class="form-control form-control-sm" id="num_inventario"
                               formControlName="inventory_number">
                      </div>

                      <div class="form-group col-md-2">
                        <label for="num_catalogo">No. Catálogo</label>
                        <input type="text" class="form-control form-control-sm" id="num_catalogo"
                               formControlName="catalog_number">
                      </div>

                      <div class="form-group col-md-2">
                        <label for="coleccion">Colección</label>
                        <select class="form-control form-control-sm" id="coleccion" formControlName="idCollection">
                          <option>Colección 1</option>
                          <option>Colección 2</option>
                          <option>Colección 3</option>
                        </select>
                      </div>

                      <div class="form-group col-md-2">
                        <label for="subcoleccion">Subcolección</label>
                        <select class="form-control form-control-sm" id="subcoleccion">
                          <option value="option">Selecciona una subcolección</option>
                          <option value="option">Opción 1</option>
                          <option value="option">Opción 2</option>
                        </select>
                      </div>

                      <div class="form-group col-md-2">
                        <label for="tipo_objeto">Tipo de objeto</label>
                        <select class="form-control form-control-sm" id="tipo_objeto">
                          <option value="option">Selecciona un tipo de objeto</option>
                        </select>
                      </div>
                    </div>

                    <!-- Botonoes -->
                    <div class="row mx-0 px-0 justify-content-between">
                      <button class="btn btn-outline-dark" (click)="form.reset()">Reiniciar</button>
                      <button class="btn btn-outline-dark">Buscar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
