<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROL DE INVENTARIOS</title>

    <!--BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!--Graficas Canvas-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--Libreria Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--Data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

    <!-- ICONOS --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   
    <!--Custom css -->
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    
<!--- Seccion del menu --->
    <?php 
        include('../menu.php') 
    ?>
<!--- Fin de la seccion del menu --->

<!--- Contenido de la pagina --->
    <section class="pt-0 px-3 mt-0 main" id="main">

            <!--Cabecera -->
                <header class="py-0">
                    <div class=" py-0 my-0 header">
                        <div class="d-flex align-items-center">
                                
                                <button class="btn my-1 p-0" id="menu-btn" style="font-size: 30px;">
                                    <i class="fa fa-bars py-0 px-2" style="color: black; background-color:none"></i>
                                </button>
                                
                                <p class="flex-fill text-center m-0 p-0 fw-bold fsr-1" style="color:#021688dc;">
                                    CONTROL DE INVENTARIOS
                                </p>
                        </div>    

                        <div class="mx-3 my-0 pb-1 text-secondary fsr-2">
                            <i class="fa fa-user py-0 px-2 text-secondary"></i> <?php echo 'User name'?>
                        </div>
                    </div>
                </header>
            <!--Fin cabecera-->

            <!--Contenido principal de la pagina -->
                <div id="contenido" class="contenido" style="max-width:100%;">
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
                </div>
            <!--Fin contenido principal de la pagina -->
    </section>

<!--- Fin contenido de la pagina --->


<!--Bostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Custom js -->
<script src="../scripts/barra_navegacion.js"></script>
</body>
</html>