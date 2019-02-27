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
      <a class="nav-link active" href="<?php echo base_url() ?>administracion">Administrar conjuntos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>colecciones">Administrar colecciones</a>
    </li>
  </ul>



  <div class="container mt-3">
    <div class="row flex-row-reverse">
      <button class="btn btn-outline-dark" (click)="openModal('new')">Registrar conjunto</button>
    </div>

  <div class="container-fluid mt-3">
    <div class="example-table-container">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th> Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> lorem ipsum </td>
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
