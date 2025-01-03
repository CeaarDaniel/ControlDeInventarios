    <!-- Menu de navegacion-->
        <nav class="navbar navbar-expand d-flex flex-column align-item-start mt-0 pt-0" id="sidebar">

            <!--Boton para cerrar el menu -->
                <div class="d-flex justify-content-end mx-0 px-3" style="width:100%">
                    <button class="btn my-1 mx-0 p-0" id="closeMenu-btn" style="font-size: 30px;">
                        <i class="fa fa-chevron-left py-0 px-0 icono"></i>
                    </button>
                </div>
            <!--Fin del boton -->

            <!--Opciones del menu -->
                <ul class="navbar-nav d-flex flex-column justify-content-center mt-2" style="width:100%;">
                    
                <!--Icono/imagen de usuario -->
                    <li class="nav-item w-100">
                        <a href="#" class="nav-link pl-5 px-2 d-flex justify-content-center">
                            <i class="fa fa-user py-0 px-2 icono"></i></a>
                    </li>

                    <!--INICIO-->
                    <li class="nav-item w-100">
                        <a href="./dashboard.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="INICIO" style="100%">
                            <i class="d-flex justify-content-center fas fa-th py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">INICIO</p>
                        </a>
                    </li>

                    <!--REGISTRO DE MATERIAL -->
                    <li class="nav-item w-100">
                        <a href="./catalogo.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="REGISTRO DE MATERIAL" style="100%">
                            <i class="d-flex justify-content-center fas fa-pencil-alt py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">REGISTRO DE MATERIAL</p>
                        </a>
                    </li>

                    <!--INVENTARIO -->
                    <li class="nav-item w-100">
                        <a href="./inventario.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="INVENTARIO" style="100%">
                            <i class="d-flex justify-content-center fas fa-archive py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">INVENTARIO</p>    
                        </a>
                    </li>

                    <!--PROVEEDORES -->
                    <li class="nav-item w-100">
                        <a href="./proveedores.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PROVEDORES" style="100%">
                            <i class="d-flex justify-content-center fa fa-users py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">PROVEEDORES</p>
                        </a>
                    </li>

                    <!--REPORTES -->
                    <li class="nav-item w-100">
                        <a href="./reportes.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="REPORTES" style="100%">
                            <i class="d-flex justify-content-center fas fa-chart-line py-0 px-1 icono" style="font-size:25px"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">REPORTES</p>
                        </a>
                    </li>

                    <!--CATALOGO -->
                    <li class="nav-item w-100">
                        <a href="./buscar.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CATALOGO" style="100%">
                            <i class="d-flex justify-content-center fas fa-search py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">CATALOGO</p>
                        </a>
                    </li>

                    <!--PIEZAS EN REORDEN -->
                    <li class="nav-item w-100">
                        <a href="./piezasReorden.php" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PIEZAS EN REORDEN" style="100%">
                            <i class="d-flex justify-content-center fas fa-exclamation py-0 px-2 icono"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">PIEZAS EN REORDEN</p>    
                        </a>
                    </li>

                    <!--SALIR -->
                    <li class="nav-item w-100">
                        <a href="../" class="nav-link pl-5 pt-3 pb-0 d-flex flex-column justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="SALIR" style="100%">
                            <i class="d-flex justify-content-center fas fa-times py-0 px-2 icono" style="font-size:25px"></i>
                            <p class="d-flex justify-content-center py-0 text-center textoMenu">SALIR</p>
                        </a>
                    </li>
                </ul> 
            <!--Fin de opciones del menu -->
        </nav>
    <!-- Fin Menu de navegacion-->