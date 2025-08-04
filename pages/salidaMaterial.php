<?php //date_default_timezone_set('Etc/GMT+6');?>
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <div class="form-container">
                <div class="form-header">
                        <h2><i class="fas fa-box-open"></i>SALIDA DE MATERIAL</h2>
                </div>
                <div class="form-content">
                                <div class="corner-decoration"></div>
                                <div class="form-decoration"></div>
                                <div class="form-decoration-2"></div>
                    <!--Formulario para el registro de salida de material-->
                        <form id="formulario-llenado">
                                <div style="color: #07038b;">
                                    <h5><i class="fas fa-box" style="color: #4ecdc4;"></i> <b>INFORMACION DEL PRODUCTO</b></h5>
                                </div>
                                <div class="row m-0 px-0">
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-tag"></i>TIPO DE PIEZA
                                            </label>
                                            <select class="in me-sm-5 icon-input" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                                <option value="" selected="selected">&#xf02c; ---CATEGORIA---</option>
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
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold form-label" for="NN">
                                                <i class="fas fa-barcode"></i>CÓDIGO DE LA PIEZA
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02a; Codigo de la pieza">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold form-label">
                                                <i class="fas fa-cube"></i>NOMBRE DE LA PIEZA
                                            </label>
                                            <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf2b9; Escriba su número de nómina" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-industry"></i>LINEA
                                            </label>  
                                            <input class="in me-sm-5 icon-input" type="text" name="proceso" id="proceso" placeholder="&#xf238; Linea" readonly>
                                        </div> 
                                    </div>

                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-cogs"></i>PROCESO
                                            </label>  
                                            <input class="in me-sm-5 icon-input" type="text" name="proceso" id="proceso" placeholder="&#xf162; Proceso" readonly>
                                        </div> 
                                    </div>

                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-warehouse"></i>RACK
                                            </label>  
                                            <input class="in me-sm-5 icon-input" type="text" name="rack" id="rack" placeholder="&#xf233; Rack" readonly>
                                        </div> 
                                    </div>

                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="form-group">
                                            <label class="form-label" for="observaciones">
                                                <i class="fas fa-image"></i> IMAGEN DE LA PIEZA
                                            </label>
                                            <div class="image-container">
                                                    <i class="fas fa-camera" style="font-size: 3rem; color: var(--secondary);"></i>
                                                </div>
                                        </div>
                                    </div>

                                    <div style="color: #07038b;">
                                        <h5><i class="fas fa-file-invoice-dollar" style="color: #4ecdc4;"></i> <b>DETALLES DE SALIDA</b></h5>
                                    </div>

                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-layer-group"></i>CANTIDAD
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0dc; Cantidad">
                                        </div> 
                                    </div>

                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-dollar-sign"></i>C/U
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo unitario">
                                        </div> 
                                    </div>
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-calculator"></i>COSTO TOTAL
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0d6; Total">
                                        </div> 
                                    </div>
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-calendar-alt"></i>FECHA DE COMPRA
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf073; Fecha de compra">
                                        </div> 
                                    </div>

                                    
                                    <div class="mt-4" style="color: #07038b;">
                                        <h5><i class="fas fa-user-tie" style="color: #4ecdc4;"></i> <b>INFORMACION DEL SOLICITANTE</b></h5>
                                    </div>
                                    
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-id-card"></i>NÚMERO DE NÓMINA
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf2b9; Número de nomina">
                                        </div> 
                                    </div>
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                 <i class="fas fa-user"></i>NOMBRE DEL SOLICITANTE
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf007; Solicitante">
                                        </div> 
                                    </div>
                                    <div class="col-12 col-md-6 my-2 px-0">
                                        <div class="d-flex flex-column flex-wrap">
                                            <label class="fw-bold px-1 form-label" for="NN">
                                                <i class="fas fa-barcode"></i>LINEA
                                            </label>  
                                            <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf275; Linea">
                                        </div> 
                                    </div>
                                </div>
                        </form>
                    <!--Fin Formulario para el registro de salida de material-->
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