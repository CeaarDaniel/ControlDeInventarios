<h5 class="my-0 py-0 text-center" style="margin-top: -60px !important">
    <b>BUSCAR UBICACIÓN DE PIEZA</b>
</h5>

<!--Formulario para buscar una pieza sin login-->
    <div class="d-flex justify-content-center align-content-center" style="width:100%">
        <form class="mt-5 formBuscarPieza">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label for=""><b>CATEGORÍA DE LA PIEZA </b></label> <br>
                    <select class="in mt-3" name="categoriaPieza" id="categoriaPieza">
                        <option value="" selected>&#xf002; --- CATEGORÍA---</option>
                        <option value="1">HOLDERS</option>
                        <option value="2">HERRAMIENTAS</option>
                        <option value="3">REFACCIONES</option>
                        <option value="4">TORNILLOS</option>
                        <option value="5">CONSUMIBLES</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 my-1">
                    <label for="text"><b>NOMBE DE LA PIEZA</b></label> <br>
                    <input id="nombrePieza" name="nombrePieza" type="text" class="in icon-input" placeholder="&#xf02d; Nombre" maxlength="">
                </div>
                <div class="col-12 col-sm-6 my-1">
                    <label for="text"><b>LINEA</b></label><br>
                    <input id="linea" name="linea" type="text" class="in icon-input" placeholder="&#xf275; Linea" maxlength="">
                </div>
                <div class="col-12 col-sm-6 my-1">
                    <label for="text"><b>PROCESO</b></label><br>
                    <input id="proceso" name="proceso" type="text" class="in icon-input" placeholder="&#xf162; Proceso" maxlength="">
                </div>
                <div class="col-12 col-sm-6 my-1">
                    <label for="text"><b>RACK</b></label><br>
                    <input id="rack" name="rack" type="text" class="in icon-input" placeholder="&#xf233; Rack" maxlength="">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3" style="width:100%">
                <button id="btnBuscar" name="btnBuscar" class="btn btnBuscar" type="button" ><i class="fas fa-search mx-1 py-1" style="font-size:20px;"></i> Buscar</button>
            </div>
        </form>
    </div>
<!-- Fin formulario para buscar una pieza sin login --->

<!--- Piesas arrojadas por la busqueda --->
    <div class="mt-4 mb-2 mx-0" style="width:100%; background-color:#D9D9D9; max-height:400px; overflow-y:auto; border-radius: 20px;">
        <div class="row mx-0 py-2">
            <div class="col-12 col-md-2 ">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                <span style="font-size: 40px; color: orange;">&#9888;&#65039;</span>
                </div>
            </div>
            <div class="col-12 col-md-2 py-2">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <i class="fa-solid fa-image" style="font-size:80px; color:blue;"></i>
                <!-- <img src="./img/Auto.png" style="max-width:100%; max-height:200px"> -->
                </div>
            </div>
            <div class="col-12 col-md-8">
             <label class="my-3"><b>NOMBRE MODELO DE LA PIEZA</b></label>
                <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                DESCRIPCION Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat vitae dolorem consectetur consequuntur corporis possimus.
                            </div>    
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                CANTIDAD DE STOCK
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                FECHA DE COMPRA
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">  
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                PROCESO
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                UBICACION
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 py-2">
            <div class="col-12 col-md-2 ">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <span style="font-size: 40px; color: red;">&#10071;</span> 
                </div>
            </div>
            <div class="col-12 col-md-2 py-2">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <i class="fa-solid fa-image" style="font-size:80px; color:blue;"></i>
                <!--  <img src="./img/Auto.png" style="max-width:100%; max-height:200px"> -->
                </div>
            </div>
            <div class="col-12 col-md-8">
                <label class="my-3"><b>NOMBRE MODELO DE LA PIEZA</b></label>
                    <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                    DESCRIPCION Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat vitae dolorem consectetur consequuntur corporis possimus,
                                </div>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                    CANTIDAD DE STOCK
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                    FECHA DE COMPRA
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">  
                                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                    PROCESO
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                    UBICACION
                                </div>
                            </div>
                    </div>
            </div>
        </div>

        <div class="row mx-0 py-2">
            <div class="col-6 col-md-2 ">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <span style="font-size: 40px; color: green;">&#10004;</span>
                </div>
            </div>
            <div class="col-6 col-md-2 py-2">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <i class="fa-solid fa-image" style="color:blue; font-size:80px"></i>
                    <!-- <img src="./img/Auto.png" style="max-width:100%; max-height:200px"> -->
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8">
                <label class="my-3"><b>NOMBRE MODELO DE LA PIEZA</b></label>
                <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                DESCRIPCION Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat vitae dolorem consectetur consequuntur corporis possimus,
                            </div>    
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                CANTIDAD DE STOCK
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                FECHA DE COMPRA
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">  
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                PROCESO
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height:100%">
                                UBICACION
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!--- Fin Piesas arrojadas por la busqueda --->

<!--Boton para volver a la pantalla anterior -->
    <button class="volver" onclick="navigation('menuIndex',0)">
        <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
    </button>
<!--Fin Boton para volver a la pantalla anterior -->
