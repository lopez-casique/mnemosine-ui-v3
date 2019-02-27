<div id="content-wrapper">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="<?php echo base_url() ?>organizaciones">Organizaciones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>exposiciones">Exposiciones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>movimientos">Movimientos</a>
    </li>
  </ul>




  <div class="container-fluid">
    <div class="row flex-row-reverse m-3">
      <a class="btn btn-outline-dark" href="<?php echo base_url() ?>nuevo_prestamo">Registrar organización</a>
    </div>
    <div class="row form-group px-5">
      <label for="nombre">Busqueda</label>
      <input type="text" id="nombre" class="form-control form-control-sm" placeholder="Buscar en organizaciones">
    </div>

    <div class="container">
      <div class="example-table-container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Ciudad / Estado / País</th>
              <th>Teléfono</th>
              <th>Opciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a class="btn btn-primary" style="margin-right:10px; color:white;"><i class="fas fa-pencil-alt"></i></a>
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
