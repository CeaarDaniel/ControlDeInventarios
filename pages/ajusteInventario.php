<!-- Inicio ventana ajuste de inventario -->

    <!--Inicio formulario para ajuste de inventario-->
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">
                    <h4 class="text-center">AJUSTE DE INVENTARIO</h4>
                            
                    <div class="row m-0 px-0">
                            <!--CATEGORIA DE LA PIEZA -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" style="max-width:240px;">CATEGORIA DE LA PIEZA</label>
                                    <select class="in me-sm-5 icon-input py-2" id="categoria">
                                        <option value="" selected>&#xf002; --- CATEGORÍA---</option>
                                        <option value="1">HOLDERS</option>
                                        <option value="2">HERRAMIENTAS</option>
                                        <option value="3">REFACCIONES</option>
                                        <option value="4">TORNILLOS</option>
                                        <option value="5">CONSUMIBLES</option>
                                    </select>
                                </div>
                            </div>

                            <!--CODIGO DE LA PIEZA -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" style="max-width:240px;">CÓDIGO DE LA PIEZA</label>  
                                    <select name="CODIGO_SHOP" id="CODIGO_SHOP" class="in me-sm-5 icon-input py-2" required>
                                        <option value="" selected="selected">&#xf02a; --- SELECCIONE UNA OPCIÓN ---</option>
                                        <option value="">INA0079</option>
                                        <option value="">INA0023</option>
                                        <option value="">INA0024</option>
                                        <option value="">CPA0025</option>
                                    </select>
                                </div> 
                            </div>
                            
                            <!--NOMBRE DE LA PIEZA -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" for="NN" style="max-width:240px;">NOMBRE DE LA PIEZA</label>  
                                    <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02d; Nombre de la pieza">
                                </div>
                            </div>

                            <!--NOMBRE DE QUIEN HACE EL AJUSTE -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="">NOMBRE DE QUIEN HACE EL AJUSTE</label>
                                    <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf007; ingrese algun valor" required>
                                </div>
                            </div>

                            <!--IMAGEN de la PIEZA -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <img src="../img/imagen.png" alt="" style="width: auto; max-height:100px">
                            </div>

                            <!--FECHA DEL AJUSTE -->
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap my-2">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DEL AJUSTE</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="date" placeholder="&#xf073;">
                                </div> 
                            </div>
                        

                            <div class="col-12 col-md-6 my-2 px-0">
                                <!-- CANTIDAD AJUSTADA-->
                                <div class="d-flex flex-column flex-wrap my-2">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD AJUSTADA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="number" placeholder="&#xf0dc; Ingrese alguna cantidad">
                                </div> 

                                <!--MOTIVO DEL AJUSTE -->
                                <div class="d-flex flex-column flex-wrap my-1">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">MOTIVO DEL AJUSTE</label>  
                                    <select class="in me-sm-5 icon-input py-2" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                        <option value="" selected="selected">&#xf029; ---Motivo del ajuste---</option>
                                        <option value="">Robo</option>
                                        <option value="">Extravio</option>
                                        <option value="">Error de registro</option>
                                        <option value="">Pieza dañada</option>
                                    </select>
                                </div> 
                            </div>

                            <div class="col-12 col-md-6 my-2 px-0">
                                <!--COMENTARIOS -->
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COMENTARIOS</label>  
                                    <textarea class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" rows=5 placeholder="&#xf022; Escriba algun comentario"></textarea>
                                </div> 
                            </div>
                    </div>
            </form>
        </div>
    <!--Fin formulario para ajuste de inventario-->

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioInventario',0)">
                <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->
<!--Fin ventana ajuste de inventario -->