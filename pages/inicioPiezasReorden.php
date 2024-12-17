<!--Formulario para buscar una pieza sin login-->
    <div class="d-flex justify-content-center align-content-center" style="width:100%">
        <form class=" d-flex justify-content-center flex-column flex-sm-row  formBuscarPieza">
            <select class="in mx-3 py-2" name="categoriaPieza" id="categoriaPieza">
                <option value="" selected>&#xf002; --- SELECCIONE UN TIPO DE PIEZA---</option>
                <option value="1">HOLDER</option>
                <option value="2">FERACCIONES</option>
                <option value="3">HERRAMIENTAS</option>
                <option value="4">CONSUMIBLES</option>
                <option value="5">CATEGORIA 5</option>
            </select>
            <div class="d-flex mt-1 justify-content-center">
                <button class="btn boton py-0 my-0">Buscar</button>
            </div>
        </form>
    </div>
<!-- Fin formulario para buscar una pieza sin login --->


<hr class="mx-0 px-0">

<!--- Piesas arrojadas por la busqueda --->
    <div class="mt-4 mb-2" style="width:100%; max-height:100%; overflow-y:auto; border-radius: 20px;">
        <div class="row mx-5 my-1 py-2" style="border-bottom: 2px #ccc; border-right: 2px #ccc; box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.2); border-radius:10px">
            <div class="col-12 col-md-2 ">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <input class="check" type="checkbox" value="" id="">
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

        <div class="row mx-5 my-1 py-2" style="border-bottom: 2px #ccc; border-right: 2px #ccc; box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.2); border-radius:10px">
            <div class="col-12 col-md-2 ">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <input class="check" type="checkbox" value="" id="">
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

        <div class="row mx-5 my-1 py-2" style="border-bottom: 2px #ccc; border-right: 2px #ccc; box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.2); border-radius:10px">
            <div class="col-6 col-md-2">
                <div class="d-flex align-items-center justify-content-center" style="height:100%">
                    <input class="check" type="checkbox" value="" id="">
                    <span style="font-size: 40px; color: red;">&#10071;</span> 
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
