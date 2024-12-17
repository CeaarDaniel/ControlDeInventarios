
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <!--Formulario de llenado-->
                <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">
                        <h4 class="text-center">AJUSTE DE INVENTARIO</h4>

                        <div class="row m-0 px-0">
                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap">
                                        <label class="fw-bold px-1" for="NN" style="max-width:240px;">Codigo del producto</label>  
                                        <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; ingrese algun valor">
                                    </div> 
                                </div>
                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap">
                                        <label class="fw-bold" for="NN" style="max-width:240px;">Nombre del producto</label>  
                                        <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf029; ingrese algun valor">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap">
                                        <label class="fw-bold" style="max-width:240px;">Nombre de quien hace el ajuste</label>
                                        <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf2b9; ingrese algun valor" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-2 px-0">
                                    <img src="../img/imagen.png" alt="" style="width: auto; max-height:100px">
                                </div>
                            

                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap my-2">
                                        <label class="fw-bold px-1" for="NN" style="max-width:240px;">Fecha del ajuste</label>  
                                        <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; ingrese algun valor">
                                    </div> 
                                    <div class="d-flex flex-column flex-wrap my-2">
                                        <label class="fw-bold px-1" for="NN" style="max-width:240px;">Cantidad ajustada</label>  
                                        <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; ingrese algun valor">
                                    </div> 
                                    <div class="d-flex flex-column flex-wrap my-1">
                                        <label class="fw-bold px-1" for="NN" style="max-width:240px;">Motivo del ajuste</label>  
                                        <select class="in me-sm-5 icon-input py-2" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                            <option value="" selected="selected">&#xf02a; ---Motivo del ajuste---</option>
                                            <option value="">Robo</option>
                                            <option value="">Extravio</option>
                                            <option value="">Error de registro</option>
                                            <option value="">Pieza dañada</option>
                                        </select>
                                    </div> 
                                </div>

                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap">
                                        <label class="fw-bold px-1" for="NN" style="max-width:240px;">Comentarios</label>  
                                        <textarea class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" rows=8 placeholder="&#xf02d; ingrese algun valor"></textarea>
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