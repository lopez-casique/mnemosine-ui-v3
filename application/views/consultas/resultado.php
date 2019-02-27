<div id="content-wrapper">

  <div class="container-fluid">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="page-wrapper">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Resultados de la busqueda</h5>
              </div>
              <div class="card-block">
                <div class="row m-3 justify-content-between">
                  <p>Resultados para: Terminos de busqueda</p>
                  <p># de elementos encontrados</p>
                </div>

                <div class="row">
                  <div class="col-md-3 mb-3">
                    <mat-card class="example-card">
                      <mat-card-header>
                        <div mat-card-avatar class="example-header-image"></div>
                        <mat-card-title>Título</mat-card-title>
                        <mat-card-subtitle>Autor</mat-card-subtitle>
                      </mat-card-header>
                      <img mat-card-image src="https://material.angular.io/assets/img/examples/shiba2.jpg" alt="Photo of a Shiba Inu">
                      <mat-card-content>
                        <p>
                          No. Procedencia: XXXXX
                        </p>
                        <p>
                          No. Inventario: XXXX
                        </p>
                        <p>
                          No. Catalogo: XXXXX
                        </p>
                        <p>
                          Descripción corta de la pieza
                        </p>
                      </mat-card-content>
                      <mat-card-actions class="text-right">
                        <!-- <button mat-button routerLink="../detalle">Ver información completa</button> -->
                        <a href="<?php echo base_url() ?>detalle" class="btn btn-primary">Ver información completa</a>
                      </mat-card-actions>
                    </mat-card>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
