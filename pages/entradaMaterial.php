<?php //date_default_timezone_set('Etc/GMT+6');?>
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <div class="form-container">
                <div class="form-header">
                    <h2 class="text-center"><i class="fas fa-dolly"></i>ENTRADA DE MATERIAL</h2>
                </div>

                <div class="form-content">
                        <div class="corner-decoration"></div>
                        <div class="form-decoration"></div>
                        <div class="form-decoration-2"></div>

                        <!--Formulario de llenado-->
                            <form id="formulario-llenado">
                                     <div style="color: #07038b;">
                                        <h5><i class="fas fa-box" style="color: #4ecdc4;"></i> <b>INFORMACIÓN DE LA PIEZA</b></h5>
                                    </div>

                                    <div class="row m-0 px-0">
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                                <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;"> <i class="fas fa-tag"></i> TIPO DE PIEZA</label>
                                                <select class="in me-sm-5 icon-input py-1 form-select" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                                    <option value="" selected="selected">&#xf02c; --- CATEGORÍA  ---</option>
                                                    <option value="">HOLDERS</option>
                                                    <option value="">HERRAMIENTAS</option>
                                                    <option value="">REFACCIONES</option>
                                                    <option value="">CONSUMIBLES</option>
                                                    <option value="">INSERTOS</option>
                                                    <option value="">TORNILLOS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                         <i class="fas fa-file-invoice"></i>FACTURA DE COMPRA
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf15c; Factura de compra">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw- form-label" for="NN" style="max-width:240px;">
                                                         <i class="fas fa-barcode"></i>CÓDIGO DE LA PIEZA
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02a; codigo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold form-label" style="max-width:240px;">
                                                        <i class="fas fa-cube"></i>NOMBRE DE LA PIEZA
                                                    </label>
                                                    <input class="in me-sm-5 icon-input form-control" id="NN" name="NN" type="number"  min=2 placeholder="&#xf02d; Nombre de la pieza" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                            <i class="fas fa-truck"></i> PROVEEDOR
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf2b5; Proveedor">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-industry"></i>LINEA
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" type="text" name="proceso" id="proceso" placeholder="&#xf275; Linea" readonly>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-cogs"></i>PROCESO
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" type="text" name="proceso" id="proceso" placeholder="&#xf162; Proceso" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-warehouse"></i>RACK
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" type="text" name="rack" id="rack" placeholder="&#xf233; Rack" readonly>
                                                </div> 
                                            </div>
                                        </div>

                                    <div style="color: #07038b;">
                                        <h5><i class="fas fa-file-invoice-dollar" style="color: #4ecdc4;"></i> <b>DETALLES DE LA COMPRA</b></h5>
                                    </div>

                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                         <i class="fas fa-layer-group"></i>CANTIDAD
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0dc; Cantidad">
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-dollar-sign"></i>
                                                        COSTO EN DOLARES
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo en dolares">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-calculator"></i>COSTO TOTAL
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0d6; Costo total">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-exchange-alt"></i>VALOR DE CAMBIO
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf1ac; Valor de cambio">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-calendar-alt"></i>FECHA DE COMPRA
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf073; Fecha de compra">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-dolar-sign">&#xf155;</i>COSTO EN PESOS
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="Costo en pesos">
                                                </div> 
                                            </div>
                                        </div>


                                    <div style="color: #07038b;">
                                        <h5><i class="fas fa-user-tie" style="color: #4ecdc4;"></i> <b>INFORMACIÓN DE QUIEN RECIBE</b></h5>
                                    </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="d-flex flex-column flex-wrap">
                                                    <label class="fw-bold px-1 form-label" for="NN" style="max-width:240px;">
                                                        <i class="fas fa-id-card"></i> NÚMERO DE NÓMINA
                                                    </label>  
                                                    <input class="in me-sm-5 icon-input form-control" id="nomina" name="nomina" type="text" placeholder="&#xf2b9; Número de nomina">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="d-flex flex-column flex-wrap">
                                                <label class="fw-bold px-1 form-label" for="NN">
                                                    <i class="fas fa-user"></i>NOMBRE DE QUIEN RECIBIÓ
                                                </label>  
                                                <input class="me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre del que recibe">
                                            </div> 
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="input-icon-container">
                                                    <label class="fw-bold px-1 form-label" for="NN">
                                                        <i class="fas fa-calendar-check"></i>FECHA DE REGISTRO DE LA COMPRA
                                                    </label>  
                                                    <input class="me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf272; Fecha de registro de la compra">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="input-icon-container">
                                                    <label class="fw-bold form-label" for="NN">
                                                        <i class="fas fa-user-edit"></i>NOMBRE DE QUIEN REGISTRÓ
                                                    </label>  
                                                    <input class="me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre de quien registro la compra">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 my-2 px-0">
                                            <div class="form-group">
                                                <div class="input-icon-container">
                                                    <label class="fw-bold px-1 form-label" for="NN">
                                                        <i class="fas fa-user-cog"></i>USUARIO QUE REGISTRÓ LA COMPRA
                                                    </label>  
                                                    <input class=" me-sm-5 icon-input form-control" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf007; Usuario que registra la compra">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        <!--Formulario de llenado-->
                </div>
            </div>
        </div>

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioInventario',0)">
             <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->