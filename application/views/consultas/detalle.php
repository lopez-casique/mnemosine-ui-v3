<div id="content-wrapper">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="page-wrapper">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Información de la pieza</h5>
            </div>
            <div class="card-block">
              <div class="row m-0">
                <div class="col-md-8">
                  <div class="row m-0" style="border: #9c0019 1px solid;">

                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Datos de identificación</span>
                    </div>

                    <div class="row col-md-12 m-0 justify-content-center" style="background: #efefef">

                      <div class="col-md-4 flex-column">
                        <p class="font-weight-bold">No. Procedencia</p>
                        <p>XXXX</p>
                      </div>
                      <div class="col-md-4 flex-column">
                        <p class="font-weight-bold">No. Inventario</p>
                        <p>XXXX</p>
                      </div>
                      <div class="col-md-4 flex-column">
                        <p class="font-weight-bold">No. Catálogo</p>
                        <p>XXXX</p>
                      </div>

                    </div>
                  </div>

                  <div class="row mx-0 mt-3">
                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Registro de origen</span>
                    </div>

                    <div class="row col-md-12 mx-0 flex-column align-items-start">
                      <p class="font-weight-bold">Descripción de origen</p>
                      <p>Aquí va la descripción de origen</p>
                    </div>
                  </div>

                  <div class="row mx-0 mt-3">
                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Datos actualizados (Departamento de investigación)</span>
                    </div>

                    <div class="row col-md-12 m-0">

                      <div class="row col-md-12">
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Colección</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Subcolección</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Tipo de objeto</p>
                          <p>XXXX</p>
                        </div>
                      </div>

                      <div class="row col-md-12">
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Tecnica</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Procedencia</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Época</p>
                          <p>XXXX</p>
                        </div>
                      </div>

                      <div class="row col-md-12">
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Titulo</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Autor</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Firmas o marcas</p>
                          <p>XXXX</p>
                        </div>
                      </div>

                      <div class="row col-md-12 flex-column">
                        <div class="col">
                          <p class="font-weight-bold">Descripción de firmas o marcas</p>
                          <p>XXXX</p>
                        </div>
                      </div>

                      <div class="row col-md-12">
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Ubicación</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-4 flex-column">
                          <p class="font-weight-bold">Fecha</p>
                          <p>XXXX</p>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row mx-0 mt-3">
                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Comentarios sobre la pieza</span>
                    </div>

                    <div class="row col-md-12 mx-0 flex-column align-items-start">
                      <p class="font-weight-bold">Descripción abreviada</p>
                      <p>Aquí va la descripción abreviada</p>
                    </div>

                    <div class="row col-md-12 mx-0 flex-column align-items-start">
                      <p class="font-weight-bold">Descripción formal</p>
                      <p>Aquí va la descripción formal</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <ngb-carousel *ngIf="images">
                    <ng-template ngbSlide>
                      <img [src]="images[0]" alt="Random first slide">
                      <!--<div class="carousel-caption">-->
                      <!--<h3>First slide label</h3>-->
                      <!--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
                      <!--</div>-->
                    </ng-template>
                    <ng-template ngbSlide>
                      <img [src]="images[1]" alt="Random second slide">
                      <!--<div class="carousel-caption">-->
                      <!--<h3></h3>-->
                      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                      <!--</div>-->
                    </ng-template>
                  </ngb-carousel>

                  <div class="row mx-0 mt-3">
                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Medidas de la pieza</span>
                    </div>

                    <div class="row col-md-12 m-0">
                      <div class="row col-md-12">
                        <div class="col-md-3 flex-column">
                          <p class="font-weight-bold">Alto</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-3 flex-column">
                          <p class="font-weight-bold">Ancho</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-3 flex-column">
                          <p class="font-weight-bold">Profundo</p>
                          <p>XXXX</p>
                        </div>
                        <div class="col-md-3 flex-column">
                          <p class="font-weight-bold">Diametro</p>
                          <p>XXXX</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mx-0 mt-3">
                    <div class="row col-md-12 m-0 detalle__header-div">
                      <span class="detalle__header-color">Referencias de la pieza</span>
                    </div>
                    <div class="row col-md-12 mx-0 flex-column align-items-start">
                      <p class="font-weight-bold">Publicaciones</p>
                      <p>Aquí van las publicaciones</p>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
