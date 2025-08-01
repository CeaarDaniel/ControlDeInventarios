<!-- Inicio ventana ajuste de inventario -->

<style>
     .image-container {
            background: rgba(236, 230, 240, 0.5);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            border: 2px dashed var(--light);
            transition: all 0.3s;
        }
        
        .image-container:hover {
            border-color: var(--teal);
            background: rgba(236, 230, 240, 0.8);
        }
        
        .image-container img {
            max-width: 100%;
            max-height: 140px;
            border-radius: 10px;
        }
</style>
        <div class="d-flex justify-content-center " style="width:100%">
            <div class="form-container">
                    <div class="form-header">
                        <h2><i class="fas fa-cogs"></i>AJUSTE DE INVENTARIO</h2>
                    </div>
                    <div class="form-content">
                        <div class="corner-decoration"></div>
                        <div class="form-decoration"></div>
                        <div class="form-decoration-2"></div>
                        
                        <form id="registroProveedores">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="nombreProveedor">
                                         <i class="fas fa-tags"></i> CATEGORÍA DE LA PIEZA
                                    </label>
                                   <div class="input-icon-container">
                                         <select class="form-select" id="categoria" name ="categoria"required>
                                            <option value="" selected>&#xf002; --- Categoria ---</option>
                                            <option value="1">HOLDERS</option>
                                            <option value="2">HERRAMIENTAS</option>
                                            <option value="3">REFACCIONES</option>
                                            <option value="4">TORNILLOS</option>
                                            <option value="5">CONSUMIBLES</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="clasificacion">
                                        <i class="fas fa-barcode"></i> CODIGO DE LA PIEZA
                                    </label>
                                    <div class="input-icon-container">
                                        <select name="CODIGO_SHOP" id="CODIGO_SHOP" class="form-select" required>
                                            <option value="" selected="selected">&#xf02a; --- Código de la pieza ---</option>
                                            <option value="">INA0079</option>
                                            <option value="">INA0023</option>
                                            <option value="">INA0024</option>
                                            <option value="">CPA0025</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="tipoTrabajo">
                                        <i class="fas fa-file-signature"></i> NOMBRE DE LA PIEZA
                                    </label>
                                    <div class="input-icon-container">
                                        <input class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02d; Nombre de la pieza">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="descripcionTrabajo">
                                        <i class="fas fa-user"></i> RESPONSABLE DEL AJUSTE
                                    </label>
                                    <div class="input-icon-container">
                                       <input class="form-control" id="NN" name="NN" type="number"  min=2 placeholder="Ingrese algun valor" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="observaciones">
                                         <i class="fas fa-image"></i> IMAGEN DE LA PIEZA
                                    </label>
                                      <div class="image-container">
                                            <i class="fas fa-camera" style="font-size: 3rem; color: var(--secondary);"></i>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="descripcionTrabajo">
                                        <i class="fas fa-calendar-alt"></i> FECHA DEL AJUSTE
                                    </label>
                                    <div class="input-icon-container">
                                        <input class="form-control" id="NOMBRE" name="NOMBRE" type="date" placeholder="&#xf073;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="descripcionTrabajo">
                                        <i class="fas fa-calculator"></i> CANTIDAD AJUSTADA
                                    </label>
                                    <div class="input-icon-container">
                                        <input class="form-control" id="NOMBRE" name="NOMBRE" type="number" placeholder="&#xf0dc; Ingrese alguna cantidad">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="descripcionTrabajo">
                                        <i class="fas fa-exclamation-circle"></i> MOTIVO DEL AJUSTE
                                    </label>
                                    <div class="input-icon-container">
                                        <select class="form-select" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                                            <option value="" selected="selected">&#xf029; --- Motivo del ajuste ---</option>
                                            <option value="">Robo</option>
                                            <option value="">Extravio</option>
                                            <option value="">Error de registro</option>
                                            <option value="">Pieza dañada</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="descripcionTrabajo">
                                       <i class="fas fa-comment-dots"></i> COMENTARIOS
                                    </label>
                                    <div class="input-icon-container">
                                          <textarea class="form-control" id="NOMBRE" name="NOMBRE" type="text" rows=3 placeholder="Escriba algun comentario"></textarea>
                                    </div>
                                </div>

                            </div>
                             
                            <div class="d-flex justify-content-center">
                                <button id="btnRegistrarProveedor" type="submit" class="form-btn">
                                    <i class="fas fa-cash-register"></i> <span> Registrar Proveedor</span>
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
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


<!--
    <!--Inicio formulario para ajuste de inventario
        <div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">
                    <h4 class="text-center">AJUSTE DE INVENTARIO</h4>
                            
                    <div class="row m-0 px-0">
                            <!--CATEGORIA DE LA PIEZA 
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

                            <!--CODIGO DE LA PIEZA 
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
                            
                            <!--NOMBRE DE LA PIEZA 
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" for="NN" style="max-width:240px;">NOMBRE DE LA PIEZA</label>  
                                    <input class="in me-sm-5 icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf02d; Nombre de la pieza">
                                </div>
                            </div>

                            <!--NOMBRE DE QUIEN HACE EL AJUSTE 
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="">NOMBRE DE QUIEN HACE EL AJUSTE</label>
                                    <input class="in me-sm-5 icon-input" id="NN" name="NN" type="number"  min=2 placeholder="&#xf007; Ingrese algun valor" required>
                                </div>
                            </div>

                            <!--IMAGEN de la PIEZA 
                            <div class="col-12 col-md-6 my-2 px-0">
                                <img src="../img/imagen.png" alt="" style="width: auto; max-height:100px">
                            </div>

                            <!--FECHA DEL AJUSTE 
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap my-2">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DEL AJUSTE</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="date" placeholder="&#xf073;">
                                </div> 
                            </div>
                        

                            <div class="col-12 col-md-6 my-2 px-0">
                                <!-- CANTIDAD AJUSTADA
                                <div class="d-flex flex-column flex-wrap my-2">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD AJUSTADA</label>  
                                    <input class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="number" placeholder="&#xf0dc; Ingrese alguna cantidad">
                                </div> 

                                <!--MOTIVO DEL AJUSTE 
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
                                <!--COMENTARIOS 
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COMENTARIOS</label>  
                                    <textarea class="in me-sm-5 icon-input" id="NOMBRE" name="NOMBRE" type="text" rows=5 placeholder="&#xf022; Escriba algun comentario"></textarea>
                                </div> 
                            </div>
                    </div>
            </form>
        </div>
-->