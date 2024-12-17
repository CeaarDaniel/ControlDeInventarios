<?php //date_default_timezone_set('Etc/GMT+6');?>

        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            
            <!--Formulario de llenado-->
                <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">

                    <h4 class="text-center">ENTRADA DE MATERIAL</h4>

                        <h5>INFORMACION DEL PRODUCTO</h5>

                        <div class="row m-0 px-0">
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">TIPO DE PIEZA</label>
                                    <select class="in me-sm-5 icon-input py-1" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                        <option value="" selected="selected">&#xf02a; ---Código shop---</option>
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
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" for="NN" style="max-width:240px;">Codigo del producto</label>  
                                    <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf029; Departamento">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="max-width:240px;">Nombre de la pieza</label>
                                    <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf2b9; Escriba su número de nómina" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">PROOVEDOR</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">UBICACION DE LA PIEZA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>

                            <h5 class="my-3">DETALLES DE LA COMPRA</h5>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO EN DOLARES</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO TOTAL</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">VALOR DE CAMBIO</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DE COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO EN PESOS</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>

                            <h4 class="my-3">INFORMACION DE QUIEN RECIBE</h4>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NUMERO DE NOMINA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NOMBRE DE QUIEN RECIBIO</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">FECHA DE REGISTRO DE LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">NOMBRE DE QUIEN REGISTRO LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN">USUARIO QUE REGISTRO LA COMPRA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre">
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