<div id="content-wrapper">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Conjuntos y colecciones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reportes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Usuarios</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Historico</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">OAI</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Visor de objetos digitales</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Preservación digital</a>
    </li>
  </ul>

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>administracion">Administrar conjuntos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="<?php echo base_url() ?>colecciones">Administrar colecciones</a>
    </li>
  </ul>

  <div class="container mt-3">
  <div class="row flex-row-reverse">
    <a class="btn btn-outline-dark" href="<?php echo base_url() ?>registrar">Registrar colección</a>
  </div>

  <div class="container-fluid mt-3">
    <form [formGroup]="form">
      <div class="row">
        <div class="form-group col-md-12">
          <label for="conjunto">Conjunto</label>
          <select class="form-control form-control-sm" id="conjunto" formControlName="idSet">
            <option value="">Selecciona un conjunto</option>
            <option value="">conjunto 1</option>
            <option value="">conjunto 2</option>
          </select>
        </div>
      </div>
    </form>
    <div class="example-table-container">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td> Lorem ipsum </td>
            <td> lorem ipsum </td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" style="margin-right:10px; margin-left:10px;"><i class="fas fa-pencil-alt"></i></button>
                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
