<?php //date_default_timezone_set('Etc/GMT+6');?>
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <!--Formulario para el registro de salida de material-->
                <form id="formulario-llenado" class="form-control px-5 mb-3 border border-secondary border-2 rounded" style="max-width:90%;">
                        <h4 class="text-center">SALIDA DE MATERIAL</h4>
                        <h5>INFORMACION DEL PRODUCTO</h5>

                        <div class="row m-0 px-0">
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">TIPO DE PIEZA</label>
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
                                    <label class="fw-bold" for="NN" style="max-width:240px;">CÓDIGO DE LA PIEZA</label>  
                                    <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02a; Codigo de la pieza">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="max-width:240px;">NOMBRE DE LA PIEZA </label>
                                    <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf2b9; Escriba su número de nómina" required>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">LINEA</label>  
                                    <input class="in me-sm-5 icon-input" type="text" name="proceso" id="proceso" placeholder="&#xf238; Linea" readonly>
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

                            <div class="col-12 col-md-6 my-2 px-0">
                                <img src="../img/imagen.png" alt="" style="width: auto; max-height:100px">
                            </div>


                            <h5 class="my-3">DETALLES DE SALIDA</h5>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0dc; Cantidad">
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">C/U</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo unitario">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO TOTAL</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0d6; Total">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DE COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf073; Fecha de compra">
                                </div> 
                            </div>

                            <h4 class="my-3">INFORMACION DEL SOLICITANTE</h4>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NÚMERO DE NÓMINA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf2b9; Número de nomina">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NOMBRE DEL SOLICITANTE</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf007; Solicitante">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">LINEA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf275; Linea">
                                </div> 
                            </div>
                        </div>
                </form>
            <!--Fin Formulario para el registro de salida de material-->
        </div>

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioInventario',0)">
             <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->