<div id="content-wrapper">
  <h1>Registrar nuevo colección</h1>
  <div mat-dialog-content>
    <div class="container">
      <form [formGroup]="form">
        <div class="row">
          <div class="form-group col-md-12">
            <label for="conjunto">Conjunto</label>
            <select class="form-control form-control-sm" id="conjunto">
              <option value="">Selecciona una conjunto</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control form-control-sm">
          </div>
        </div>

        <div class="row">
          <div class="form-grup col-md-12">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control form-control-sm" id="descripcion" rows="3"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container" style="margin-top:30px;">
    <a class="btn rounded btn-outline-dark" href="<?php echo base_url() ?>colecciones">Cancelar</a>
    <a class="btn rounded btn-outline-dark" href="#">Registrar</a>
  </div>
