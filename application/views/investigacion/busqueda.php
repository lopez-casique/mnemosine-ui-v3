<div id="content-wrapper">

  <div class="container-fluid">
    <div class="row m-3 detalle__header-div">
      <h3 class="detalle__header-color">Introduzca algún dato de la pieza que desea localizar</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="form-group col-md-12">
          <label for="conjunto">Conjunto</label>
          <select class="form-control form-control-sm" id="conjunto">
            <option value="option">Selecciona un conjunto</option>
            <option value="option">Opción 1</option>
            <option value="option">Opción 2</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="num_procedencia">No. Procedencia</label>
          <input type="text" class="form-control form-control-sm" id="num_procedencia">
        </div>
        <div class="form-group col-md-4">
          <label for="num_inventario">No. Inventario</label>
          <input type="text" class="form-control form-control-sm" id="num_inventario">
        </div>

        <div class="form-group col-md-4">
          <label for="num_catalogo">No. Catálogo</label>
          <input type="text" class="form-control form-control-sm" id="num_catalogo">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="coleccion">Colección</label>
          <select class="form-control form-control-sm" id="coleccion">
            <option value="option">Selecciona una colección</option>
            <option value="option">Opción 1</option>
            <option value="option">Opción 2</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="subcoleccion">Subcolección</label>
          <select class="form-control form-control-sm" id="subcoleccion">
            <option value="option">Selecciona una subcolección</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="tipo_objeto">Tipo de objeto</label>
          <select class="form-control form-control-sm" id="tipo_objeto">
            <option value="option">Selecciona un tipo de objeto</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="autor">Autor</label>
          <select class="form-control form-control-sm" id="autor">
            <option value="option">Selecciona un autor</option>
            <option value="option">Opción 1</option>
            <option value="option">Opción 2</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="titulo">Título</label>
          <label for="num_catalogo">No. Catálogo</label>
          <input type="text" class="form-control form-control-sm" id="titulo">
        </div>

        <div class="form-group col-md-4">
          <label for="epoca">Época</label>
          <select class="form-control form-control-sm" id="epoca">
            <option value="option">Selecciona una época</option>
            <option value="option">Opción 1</option>
            <option value="option">Opción 2</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="procedencia">Procedencia</label>
          <select class="form-control form-control-sm" id="procedencia">
            <option value="option">Selecciona una procedencia</option>
            <option value="option">Opción 1</option>
            <option value="option">Opción 2</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="ubicacion">Ubicación</label>
          <select class="form-control form-control-sm" id="ubicacion">
            <option value="option">Selecciona un subgénero</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Firmas o marcas</label>
        </div>
      </div>

      <div class="row flex-row-reverse">
        <a href="<?php echo base_url() ?>resultado" class="btn btn-outline-dark m-3">Buscar</a>
        <button class="btn btn-outline-dark m-3">Limpiar</button>
      </div>

    </div>

  </div>
