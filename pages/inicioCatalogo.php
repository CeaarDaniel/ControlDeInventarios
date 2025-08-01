<?php 
    date_default_timezone_set('Etc/GMT+6');
    include('../api/conexion.php');

    $sn = "select idCategoria, nombreCategoria from SCI_categoria"; 
    $consulta = $conn->prepare($sn);
    $consulta->execute();
    $respuesta = array();

    $sql="select* from SCI_unidades where nombreUnidad='DOLAR'";
    $consultaD = $conn->prepare($sql);
    $consultaD->execute();
    $dolar = $consultaD->fetch(PDO::FETCH_ASSOC);


    $sqlLinea = 'SELECT idLinea, nombreLinea from SCI_Linea';
    $lineas = $conn->prepare($sqlLinea); 
    $lineas->execute();
     while($res = $consulta->fetch(PDO::FETCH_ASSOC))
           $respuesta[] = $res;
?>

<!-- Modal de agregar pieza -->
<div class="modal fade" id="modalAgregarPieza" tabindex="-1" aria-labelledby="modalAgregarPieza" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header py-1" style="border: 0px solid white;">
        <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b>REGISTRO DE UNA PIEZA</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <!--Formulario paginado para agregar un item -->
                <form class="px-0 mx-0 d-flex justify-content-center align-items-center" id="formularioAgregar" style="height: 100%; width:100%;">
                    <!--SECCION 1-->
                    <div class="seccion" id="seccion1">
                        <div class="row px-0 mx-0 my-1">
                            <div class="col-12 d-flex justify-content-center px-0">
                                <label><b>CATEGORÍA/TIPO DE PIEZA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <select class="in mt-3" id="idCategoria_fk" name="idCategoria_fk" required>
                                    <option  value="" selected>&#xf002; --- CATEGORÍA---</option>
                                        <?php
                                            foreach($respuesta as $res)
                                                echo '<option value="'.$res['idCategoria'].'">'.$res['nombreCategoria'].' </option>';
                                        ?>
                                </select>
                            </div>
                        </div>


                        <!--CODIGO DEL ITEM -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>CODIGO DEL ITEM</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input id="idItem" name="idItem" class="in" placeholder="&#xf02a; Codigo item" maxlength="100" required>
                            </div>
                        </div>
                        

                        <!--NOMBRE/MODELO-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>NOMBRE Y/O MODELO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="nombreModeloItem" id="nombreModeloItem" maxlength="200" placeholder="&#xf02d; Nombre" required>
                            </div>
                        </div>

                        <!-- DESCRIPCION -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                        <!--  <label><b>TIPO DE REFACCIÓN</b></label> -->
                                        <label><b>DESCRIPCION</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <textarea class="in" name="descripcionItem" id="descripcionItem" maxlength="200" rows=3 placeholder="&#xf085 Descripcion" style="max-height:100px"></textarea>
                                <!-- <input class="in" name="" id="" placeholder="&#xf085 Tipo de refaccion"> -->
                            </div>
                        </div>

                        <!--IMAGEN-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>IMAGEN</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input type="file" class="in" name="imagenItem" id="imagenItem">
                            </div>
                        </div>



                        <!--INVENTARIABLE -->
                         <!--
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>INVENTARIABLE</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                        <div>
                                            <input class="radio" type="radio" name="filtroSQ" id="filtroSQ1" value="S" checked>
                                            <label class="form-check-label mx-1" for="filtroSQ1">SI</label>
                                        </div>
                                    
                                        <div>
                                            <input class="radio" type="radio" name="filtroSQ" id="filtroSQ2" value="N">
                                            <label class="form-check-label mx-1" for="filtroSQ2">NO</label>
                                        </div>
                                </div>
                            </div>
                          -->
                    </div>
                
                    <!-- SECCION 2 -->
                    <div class="seccion" id="seccion2" style="display:none;">

                        <!--INCERTO -->
                        <!--
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>INCERTO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="incerto" id="incerto" placeholder="&#xf0d0; Incerto">
                                </div>
                            </div>
                        -->

                        <!--LINEA -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>LINEA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <select class="in" name="idLinea" id="idLinea">
                                    <option value="">&#xf275; ---- Linea ----</option>
                                    <?php
                                        while($linea = $lineas->fetch(PDO::FETCH_ASSOC))
                                            echo '<option value= '.$linea['idLinea'].'>'.$linea['nombreLinea'].'</option>'
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!--PROCESO-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PROCESO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input name="procesoA" id="procesoA" class="in" maxlength="5" type="text" placeholder="&#xf162; Proceso">
                            </div>
                        </div>

                        <!--TIEMPO DE VIDA  -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>TIEMPO DE VIDA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input type="text" class="in" name="tiempoVidaA" id="tiempoVidaA" maxlength="100" placeholder="&#xf252 Tiempo de vida">
                            </div>
                        </div>

                        <!--Boton para agregar procesos -->
                        <div class="d-flex justify-content-center" style="width:100%">
                                <button id="btnAgregarProceso" name="btnAgregarProceso" class="btn boton"><i class="fas fa-plus mx-1 py-1" style="font-size:20px;"></i></button>
                        </div> 

                        <!--PROCESO Y TIEMPO DE VIDA QUE SE INCERTARA EN LA BASE DE DATOS -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <input name="proceso" id="proceso" class="in" maxlength="100" type="text" placeholder="&#xf162; Proceso" style="pointer-events: none; ">
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <input type="text" class="in" name="tiempoVida" id="tiempoVida" maxlength="100" placeholder="&#xf252 Tiempo de vida" style="pointer-events: none; ">
                            </div>

                            <div class="d-flex justify-content-center" style="width:100%">
                                <button id="btnEliminarProceso" name="btnEliminarProceso" class="btn"><i class="fas fa-times mx-1 py-1" style="font-size:20px;"></i></button>
                            </div> 
                        </div>
                    </div>
                
                    <!--SECCION 3 -->
                    <div class="seccion" id="seccion3" style="display:none;">

                        <!--RACK/GABETA -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>RACK/GABETA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="rackGabeta" id="rackGabeta" maxlength="50" placeholder="&#xf233; Rack">
                            </div>
                        </div>

                        <!--ESPACIO -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>ESPACIO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" id="espacio" name="espacio" type="text" maxlength="50" placeholder=" Espacio">
                            </div>
                        </div>

                        <!--MINIMO -->
                        <div id="divminimo" class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>MÍNIMO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input id="minimo" name="minimo" type="number" class="in" step=1 min=0 placeholder="&#xf063; Minimo">
                            </div>
                        </div>

                        <!--MAXIMO -->
                        <div id="divmaximo" class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>MÁXIMO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input name="maximo" id="maximo" class="in" type="number" step=1 min=0 placeholder="&#xf062; Maximo">
                            </div>
                        </div>

                        <!--PUNTO DE REORDEN -->
                        <div id="divpuntoReorden" class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PUNTO DE REORDEN</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input id="puntoReorden" name="puntoReorden" class="in" type="number" min=0 placeholder="&#xf021 Puntos de reorden">
                            </div>
                        </div>
                    </div>

                    <!--SECCION 4 -->
                    <div class="seccion" id="seccion4" style="display:none;">

                        <!--PARO DE PROCESO-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>IMPLICA PARO DE PROCESO</b></label>
                            </div> 
                            <div class="col-12 d-flex justify-content-center">
                                <select id="paroProceso" name="paroProceso" class="px-1" required>
                                    <option value="">SELECCIONE UNA OPCION</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                        </div>

                        <!--TIEMPO DE ENTREGA -->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>TIEMPO DE ENTREGA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="tiempoEntrega" id="tiempoEntrega" placeholder="&#xf073; Tiempo en semanas">
                            </div>
                        </div>

                        <!--COSTO EN PESOS-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>COSTO EN PESOS</b></label>
                            </div>
                            <!-- COSTO EN PESOS-->
                            <div class="col-12 d-flex justify-content-center">
                                <input id="costoPesos" name="costoPesos" class="in" type="number" min="0" step=0.01 placeholder="&#xf155; Costo en pesos" required>
                            </div>
                        </div>


                        <div class="row px-0 mx-0 my-3">
                            <div class="col-6 d-flex justify-content-center align-items-center px-0">
                                <label><b>COSTO EN DOLARES</b></label>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center px-0">
                                <label><b>VALOR DE CAMBIO</b></label>
                            </div>

                            <!--COSTO EN DOLARES-->
                            <div class="col-6 d-flex justify-content-center">
                                <input id="costoDolar" name="costoDolar" class="in" type="number" min=0 step=0.01 placeholder="Costo en dolares">
                            </div>

                            <!--VALOR DE CAMBIO-->
                            <div class="col-6 d-flex justify-content-center">
                                <input id="valorCambio" name="valorCambio" class="in" type="number" min=0 step=0.01 placeholder="Valor de cambio" value="<?php echo $dolar['descripcionUnidad']?>">
                            </div>
                        </div>


                        <!--EXISTENCIA-->
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>STOCK INICIAL</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input name="existencia" id="existencia" class="in" type="number" min=0 placeholder="&#xf01c; stock" required>
                            </div>
                        </div>

                        <!--MARCA-->
                         <!--
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MARCA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="" placeholder="&#xf0a3 Marca">
                                </div>
                            </div>
                            -->

                        <!--PROVEEDOR -->
                        <!-- 
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PROVEEDOR</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="" id="" placeholder="&#xf2b5 Proveedor">
                            </div>
                        </div>
                        -->
                    </div>
                </form>
            <!--Fin del formulario paginado para agregar un item -->
        </div>

        <!--Pie del modal -->
            <div class="modal-footer py-1" style="border: 0px solid white;">
                <!--Botones adelante atras -->
                    <div class="d-flex justify-content-center" style="width:100%"> 
                        <button class="btn boton mx-1" id="prevBtn" disabled><i class="fa fa-angle-left py-0 px-2 icono"></i> <span>Anterior</span></button>
                        <button class="btn boton mx-1" id="nextBtn"><span>Siguiente</span> <i class="fa fa-angle-right py-0 px-2 icono"></i></button>
                        <button class="btn boton mx-1" id="sendBtn" style="display: none;">Registrar<i class="fa-regular fa-paper-plane py-0 px-3 icono"></i></button>
                    </div>
                <!--Fin Botones adelante atras -->

                <!--Lineas y circulos de progreso -->
                <div class="d-flex justify-content-center px-sm-0 px-md-5 circleAgregar" style="width:100%">
                    <div class="progress-container" style="width: 100%;">
                        <div class="circle active my-3">1</div>
                        <div class="line"></div>
                        <div class="circle">2</div>
                        <div class="line"></div>
                        <div class="circle">3</div>
                        <div class="line"></div>
                        <div class="circle">4</div>
                    </div>
                </div>
                <!--Fin Lineas y circulos de progreso -->
            </div>
        <!--Fin pie del modal -->
    </div>
  </div> 
</div>
<!-- Fin modal para agregar pieza -->


<!-- Modal para edita la pieza-->
    <div class="modal fade" id="modalEditarPieza" tabindex="-1" aria-labelledby="modalEditarPieza" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b> EDITAR ITEM </b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="px-0 mx-0 d-flex justify-content-center align-items-center" id="formularioEditar" style="height: 100%; width:100%;">
                        <div class="" id="">

                            <!--CATEGORIA/TIPO PIEZA -->
                            <div class="row px-0 mx-0 my-1">
                                <div class="col-12 d-flex justify-content-center px-0">
                                    <label><b>CATEGORÍA/TIPO DE PIEZA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <select class="in py-1" name="categoriaPiezafe" id="categoriaPiezafe">
                                        <option value="" selected>&#xf002; --- CATEGORÍA---</option>
                                        <option value="1">HOLDERS</option>
                                        <option value="2">HERRAMIENTAS</option>
                                        <option value="3">REFACCIONES</option>
                                    </select>
                                </div>
                            </div>

                            <!--NOMBRE MODELO ITEM -->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>NOMBRE</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="nombrefe" id="nombrefe">
                                </div>
                            </div>

                            <!--COSTO-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>COSTO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--CODIGO -->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>CÓDIGO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--STOCK INICIAL -->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>STOCK INICIAL</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--INVENTARIABLE -->
                            <!--
                                <div class="row px-0 mx-0 my-3">
                                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>INVENTARIABLE</b></label>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                            <div>
                                                <input class="radio" type="radio" name="filtroSQfe" id="filtroSQ1fe" value="S" checked>
                                                <label class="form-check-label mx-1" for="filtroSQ1">SI</label>
                                            </div>
                                        
                                            <div>
                                                <input class="radio" type="radio" name="filtroSQfe" id="filtroSQ2fe" value="N">
                                                <label class="form-check-label mx-1" for="filtroSQ2">NO</label>
                                            </div>
                                    </div>
                                </div>
                            -->
                        </div>

                        <!--INCERTO-->
                            <!-- ESTA SE PUEDE OMITIR NO ES MUY NECESARIA
                                <div class="" id="" style="display:none;">
                                    <div class="row px-0 mx-0 my-3">
                                        <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                            <label><b>INCERTO</b></label>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input class="in" name="" id="">
                                        </div>
                                    </div>

                                    <div class="row px-0 mx-0 my-3">
                                        <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                            <label><b>PROCESO</b></label>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input class="in" name="" id="">
                                        </div>
                                    </div>

                                    <div class="row px-0 mx-0 my-3">
                                        <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                            <label><b>LINEA</b></label>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input class="in" name="" id="">
                                        </div>
                                    </div>

                                    <div class="row px-0 mx-0 my-3">
                                        <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                            <label><b>RACK</b></label>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input class="in" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            -->


                        <div class="" id="" style="display:none;">
                            <!--MINIMO-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MÍNIMO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--MAXIMO-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MÁXIMO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--TIEMPO DE VIDA -->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>TIEMPO DE VIDA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--PUNTOS DE REORDEN-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>PUNTOS DE REORDEN</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="tiempoEntregafe" id="tiempoEntregafe" placeholder="Tiempo de entrega">
                                </div>
                            </div>
                        </div>

                        <div class="" id="" style="display:none;">

                            <!--TIEMPO DE ENTREGA -->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>TIEMPO DE ENTREGA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                          <!--MARCA-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MARCA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--PROVEEDOR-->
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>PROVEEDOR</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <!--
                                <div class="row px-0 mx-0 my-3">
                                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                        <label><b>TIPO DE REFACCIÓN</b></label>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <input class="in" name="" id="">
                                    </div>
                                </div>
                            -->
                        </div>
                    </form>
                </div>

                <!--Pie del modal -->
                <div class="modal-footer py-1" style="border: 0px solid white;">
                        <!--Botones adelante atras -->
                            <div class="d-flex justify-content-center" style="width:100%"> 
                                <button class="btn boton mx-1" id="prevBtnfe" disabled><i class="fa fa-angle-left py-0 px-2 icono"></i> <span>Anterior</span></button>
                                <button class="btn boton mx-1" id="nextBtnfe"><span>Siguiente</span> <i class="fa fa-angle-right py-0 px-2 icono"></i></button>
                                <button class="btn boton mx-1" id="sendBtnfe" style="display: none;">Registrar<i class="fa-regular fa-paper-plane py-0 px-3 icono"></i></button>
                            </div>
                        <!--Fin Botones adelante atras -->

                        <!--Lineas y circulos de progreso -->
                            <div id="" class="d-flex justify-content-center px-sm-0 px-md-5 circleEditar" style="width:100%">
                                <div class="progress-container" style="width: 100%;">
                                    <div class="circle acive my-3">1</div>
                                    <div class="line"></div>
                                    <div class="circle">2</div>
                                    <div class="line"></div>
                                    <div class="circle">3</div>
                                    <div class="line"></div>
                                    <div class="circle">4</div>
                                </div>
                            </div>
                        <!--Fin Lineas y circulos de progreso -->
                </div>
                <!--Fin pie de modal -->
            </div>
        </div> 
    </div>
<!--Fin del modal para editar pieza-->

<!--Filtro de categoria -->
    <div>
        <div class="d-flex flex-row flex-sm-row justify-content-start mx-2 mt-5 mb-1" style="width:100%">
                <label for="">CATEGORÍA DE LA PIEZA </label> 
        </div>

        <div>
            <select class="in mx-2 mt-0 mb-2" name="categoriaPieza" id="categoriaPieza">
                <option value="" selected>&#xf002; --- CATEGORÍA---</option>
                <option value="1">HOLDERS</option>
                <option value="2">HERRAMIENTAS</option>
                <option value="3">REFACCIONES</option>
            </select>
        </div>
    </div>
<!--Fin filtro de categoria -->

    <!--Contenedor de los items -->
        <div class=" py-3 px-3 px-md-0 mx-sm-0 mx-lg-1 mx-xl-5 my-3 rounded" style="background-color:#FFF">
            <input id="" name="" type="text" class="in icon-input my-3 mx-4" placeholder="&#xf02d; Nombre de la pieza" style="width:auto">

            <!--Listado de los items -->
                <div id="itemContainer" class="row mx-md-0 mx-lg-5"></div>
            <!--Fin del listado de los items -->

            <!--Numeracion de pagina -->
                <div class="d-flex justify-content-center" style="width:100%">
                    <nav class="d-flex justify-content-center px-3" style="width: 70%;">
                        <ul class="pagination" id="pagination" style="width: auto; overflow-y: auto;"></ul>
                    </nav>
                </div>
            <!--Fin de numeracion de pagina -->
        </div>
    <!--Fin de el contenedor de los items -->


    <!--Boton para agregar un nuevo item -->
        <button class="btn btnBuscar btnfloat" type="button"  data-bs-toggle="modal" data-bs-target="#modalAgregarPieza">
            <i class="fas fa-plus mx-1 py-1" style="font-size:20px;"></i> <span class="p-0 m-0">Agregar<span>
        </button>
    <!--Fin Boton para agregar un nuevo item -->