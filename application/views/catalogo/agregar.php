<div id="content-wrapper">
  <div class="container">
      <h1>Registrar nueva pieza</h1>
  </div>

  <div mat-dialog-content>
    <form>
      <div class="row flex-row-reverse mx-0">
        <div class="form-group col-md-4">
          <label for="fecha_ingreso">Fecha de ingreso</label>
          <input type="date" id="fecha_ingreso" class="form-control form-control-sm"
                 formControlName="date_of_entry">
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="form-group col-md-12">
            <label for="conjunto">Conjunto</label>
            <select class="form-control form-control-sm" id="conjunto" formControlName="idSet">
              <option value="">Conjunto 1</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="num_procedencia">No. Procedencia</label>
            <input type="text" id="num_procedencia" class="form-control form-control-sm">
          </div>

          <div class="form-group col-md-4">
            <label for="num_inventario">No. Inventario</label>
            <input type="text" id="num_inventario" class="form-control form-control-sm">
          </div>

          <div class="form-group col-md-4">
            <label for="num_catalogo">No. Catálogo</label>
            <input type="text" id="num_catalogo" class="form-control form-control-sm">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="coleccion">Colección</label>
            <select class="form-control form-control-sm" id="coleccion">
              <option value="">
                Colección 1
              </option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="subgenero">Subcolección</label>
            <select class="form-control form-control-sm" id="subgenero">
              <option value="option">Selecciona un subgénero</option>
              <option value="option">Selecciona un subgénero</option>
              <option value="option">Selecciona un subgénero</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="tipo_objeto">Tipo de objeto</label>
            <select class="form-control form-control-sm" id="tipo_objeto">
              <option value="option">Selecciona un tipo de objeto</option>
              <option value="option">Selecciona un tipo de objeto</option>
              <option value="option">Selecciona un tipo de objeto</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-8">
            <label for="ubicación">Ubicación</label>
            <select class="form-control form-control-sm" id="ubicación">
              <option value="option">Selecciona una ubicación</option>
              <option value="option">Selecciona una ubicación</option>
              <option value="option">Selecciona una ubicación</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="avaluo">Avalúo</label>
            <input type="text" id="avaluo" class="form-control form-control-sm">
          </div>
        </div>

        <div class="row">
          <div class="form-grup col-md-12">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control form-control-sm" id="descripcion" rows="3"></textarea>
          </div>
        </div>
      </div>

      <div class="container m-3">
        <div class="row" style="background: #9c0019">
          <span style="color: #ffffff">Medidas de la obra (cm)</span>
        </div>

        <div class="row mt-3">
          <div class="form-group col-md-3">
            <label for="alto">Alto</label>
            <input type="text" id="alto" class="form-control form-control-sm">
          </div>

          <div class="form-group col-md-3">
            <label for="ancho">Ancho</label>
            <input type="text" id="ancho" class="form-control form-control-sm">
          </div>

          <div class="form-group col-md-3">
            <label for="profundo">Profundo</label>
            <input type="text" id="profundo" class="form-control form-control-sm">
          </div>

          <div class="form-group col-md-3">
            <label for="diametro">Diametro</label>
            <input type="text" id="diametro" class="form-control form-control-sm">
          </div>
        </div>

        <div class="row mt-3 p-0 mx-0">
          <div class="container">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">¿La pieza tiene marco o base?</label>
          </div>

          <div style="margin-top:15px;">
            <button class="btn rounded btn-outline-dark">Cancelar</button>
            <a href="#" class="btn rounded btn-outline-dark">Registrar</a>
          </div>
        </div>
      </div>
    </form>
  </div>
