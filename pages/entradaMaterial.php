<?php //date_default_timezone_set('Etc/GMT+6');?>

        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            
            <!--Formulario de llenado-->
                <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">

                    <h4 class="text-center">ENTRADA DE MATERIAL</h4>

                        <h5>INFORMACIÓN DE LA PIEZA</h5>

                        <div class="row m-0 px-0">
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">TIPO DE PIEZA</label>
                                    <select class="in me-sm-5 icon-input py-1" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
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
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FACTURA DE COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf15c; Factura de compra">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" for="NN" style="max-width:240px;">CÓDIGO DE LA PIEZA</label>  
                                    <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02a; codigo">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="max-width:240px;">NOMBRE DE LA PIEZA</label>
                                    <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf02d; Nombre de la pieza" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">PROVEEDOR</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf2b5; Proveedor">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">LINEA</label>  
                                    <input class="in me-sm-5 icon-input" type="text" name="proceso" id="proceso" placeholder="&#xf275; Linea" readonly>
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">PROCESO</label>  
                                    <input class="in me-sm-5 icon-input" type="text" name="proceso" id="proceso" placeholder="&#xf162; Proceso" readonly>
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">RACK</label>  
                                    <input class="in me-sm-5 icon-input" type="text" name="rack" id="rack" placeholder="&#xf233; Rack" readonly>
                                </div> 
                            </div>

                            <h5 class="my-3">DETALLES DE LA COMPRA</h5>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0dc; Cantidad">
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO EN DOLARES</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo en dolares">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO TOTAL</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0d6; Costo total">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">VALOR DE CAMBIO</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf1ac; Valor de cambio">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DE COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf073; Fecha de compra">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO EN PESOS</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo en pesos">
                                </div> 
                            </div>

                            <h4 class="my-3">INFORMACIÓN DE QUIEN RECIBE</h4>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NÚMERO DE NÓMINA</label>  
                                    <input class="in me-sm-5 icon-input" id="nomina" name="nomina" type="text" placeholder="&#xf2b9; Número de nomina">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NOMBRE DE QUIEN RECIBIÓ</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre del que recibe">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">FECHA DE REGISTRO DE LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf272; Fecha de registro de la compra">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">NOMBRE DE QUIEN REGISTRÓ LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre de quien registro la compra">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">USUARIO QUE REGISTRÓ LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf007; Usuario que registra la compra">
                                </div> 
                            </div>
                        </div>
                </form>
            <!--Formulario de llenado-->
        </div>

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioInventario',0)">
             <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->