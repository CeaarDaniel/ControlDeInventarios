<!-- Modal de agregar pieza -->
<div class="modal fade" id="modalAgregarPieza" tabindex="-1" aria-labelledby="modalAgregarPieza" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header py-1" style="border: 0px solid white;">
        <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b>REGISTRO DE UNA PIEZA</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <!--Formulario para agregar un item -->
                <form class="px-0 mx-0 d-flex justify-content-center align-items-center" id="miFormulario" style="height: 100%; width:100%;">
                    
                    <div class="seccion" id="seccion1">
                        <div class="row px-0 mx-0 my-1">
                            <div class="col-12 d-flex justify-content-center px-0">
                                <label><b>CATEGORÍA/TIPO DE PIEZA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <select class="in mt-3" name="categoriaPieza" id="categoriaPieza">
                                    <option value="" selected>--- CATEGORÍA  ---</option>
                                    <option value="1">CATEGORIA 1</option>
                                    <option value="2">CATEGORIA 2</option>
                                    <option value="3">CATEGORIA 3</option>
                                    <option value="4">CATEGORIA 4</option>
                                    <option value="5">CATEGORIA 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>Nombre</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="nombrePieza" id="nombrePieza" placeholder="&#xf02d; Nombre">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>Costo</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="costoPieza" id="costoPieza" placeholder="&#xf155; Costo">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>Codigo</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="codigoPieza" id="codigoPieza" placeholder="&#xf02a codigo">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>Stock inicial</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="stock" id="stock" placeholder="&#xf01c; stock">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <label><b>Inventariable</b></label>
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
                    </div>
                
                    <div class="seccion" id="seccion2" style="display:none;">
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>INCERTO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="incerto" id="incerto" placeholder="&#xf0d0; Incerto">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PROCESO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="proceso" id="proceso" placeholder="&#xf162; Proceso">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>LINEA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="linea" id="linea" placeholder="&#xf238; Linea">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>RACK</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="rack" id="rack" placeholder="&#xf233; Rack">
                            </div>
                        </div>
                    </div>
                
                    <div class="seccion" id="seccion3" style="display:none;">
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>MINIMO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="minimo" id="minimo" placeholder="&#xf063; Minimo">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>MAXIMO</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="maximo" id="maximo" placeholder="&#xf062; Maximo">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>TIEMPO DE VIDA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="tiempoVida" id="tiempoVida" placeholder="&#xf252 Tiempo de vida">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PUNTOS DE REORDEN</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="puntosReorden" id="puntosReorden" placeholder="&#xf021 Puntos de reorden">
                            </div>
                        </div>
                    </div>

                    <div class="seccion" id="seccion4" style="display:none;">
                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>TIEMPO DE ENTREGA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="" id="">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>MARCA</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="" id="">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>PROVEEDOR</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="" id="">
                            </div>
                        </div>

                        <div class="row px-0 mx-0 my-3">
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>TIPO DE REFACCION</b></label>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="in" name="" id="">
                            </div>
                        </div>
                    </div>
                </form>
            <!--Fin del formulario para agregar un item -->
        </div>
        <div class="modal-footer py-1" style="border: 0px solid white;">
                <div class="d-flex justify-content-center" style="width:100%"> 
                    <button class="btn boton mx-1" id="prevBtn" disabled><i class="fa fa-angle-left py-0 px-2 icono"></i> <span>ANTERIOR</span></button>
                    <button class="btn boton mx-1" id="nextBtn"><span>SIGUIENTE</span> <i class="fa fa-angle-right py-0 px-2 icono"></i></button>
                    <button class="btn boton mx-1" id="sendBtn" style="display: none;">REGISTRAR<i class="fa-regular fa-paper-plane py-0 px-3 icono"></i></button>
                </div>
                <div class="d-flex justify-content-center px-sm-0 px-md-5" style="width:100%">
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
        </div>
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
                    <form class="px-0 mx-0 d-flex justify-content-center align-items-center" id="miFormulario" style="height: 100%; width:100%;">
                        <div class="seccion" id="seccion1">
                            <div class="row px-0 mx-0 my-1">
                                <div class="col-12 d-flex justify-content-center px-0">
                                    <label><b>CATEGORÍA/TIPO DE PIEZA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <select class="in py-1" name="categoriaPieza" id="categoriaPieza">
                                        <option value="" selected>&#xf002; --- CATEGORÍA---</option>
                                        <option value="1">HOLDERS</option>
                                        <option value="2">HERRAMIENTAS</option>
                                        <option value="3">REFACCIONES</option>
                                        <option value="4">INSERTOS</option>
                                        <option value="5">CONSUMIBLES</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>Nombre</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="nombre" id="nombre">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>Costo</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>Codigo</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>Stock inicial</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <label><b>Inventariable</b></label>
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
                        </div>
                    
                        <div class="seccion" id="seccion2" style="display:none;">
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
                    
                        <div class="seccion" id="seccion3" style="display:none;">
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MINIMO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MAXIMO</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>TIEMPO DE VIDA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>PUNTOS DE REORDEN</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>
                        </div>

                        <div class="seccion" id="seccion4" style="display:none;">
                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>TIEMPO DE ENTREGA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>MARCA</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>PROVEEDOR</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>

                            <div class="row px-0 mx-0 my-3">
                                <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                    <label><b>TIPO DE REFACCION</b></label>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input class="in" name="" id="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer py-1" style="border: 0px solid white;">
                        <div class="d-flex justify-content-center" style="width:100%"> 
                            <button class="btn boton mx-1" id="prevBtn" disabled><i class="fa fa-angle-left py-0 px-2 icono"></i> <span>ANTERIOR</span></button>
                            <button class="btn boton mx-1" id="nextBtn"><span>SIGUIENTE</span> <i class="fa fa-angle-right py-0 px-2 icono"></i></button>
                            <button class="btn boton mx-1" id="sendBtn" style="display: none;">REGISTRAR<i class="fa-regular fa-paper-plane py-0 px-3 icono"></i></button>
                        </div>
                        <div class="d-flex justify-content-center px-sm-0 px-md-5" style="width:100%">
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
                </div>
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
                <option value="4">TORNILLOS</option>
                <option value="5">CONSUMIBLES</option>
            </select>
        </div>
    </div>
<!--Fin filtro de categoria -->



    <!--Contenedor de los items -->
        <div class="py-3 px-3 px-md-0 mx-sm-0 mx-lg-1 mx-xl-5 my-3 rounded" style="background-color:#e0e0e080">
            <input id="agencia" name="agencia" type="text" class="in icon-input my-3 mx-4" placeholder="Nombre de la pieza" style="width:auto">

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

    <script>
        // Datos simulados
            const items = Array.from({ length: 100}, (_, i) => `Elemento ${i + 1}`);
            const resultsPerPage = 9;
            let currentPage = 1;

        // Función para mostrar los divs de los items
            function displayItems(page) {

                const formDataPa = new FormData();

                fetch("./base_de_datos/operaciones_prestamos.php", {
                    method: "POST",
                    body: formDataPa,
                })
                    .then((response) => response.json())
                    .then((data) => {
                        items = data
                    })
                    .catch((error) => {
                    console.log("Error:", error);
                    });

                const start = (page - 1) * resultsPerPage;
                const end = start + resultsPerPage;
                const paginatedItems = items.slice(start, end);
                const container = document.getElementById('itemContainer');
                container.innerHTML = ''; // Limpiar contenido anterior

                    //Listado de los items registrados del catalogo
                        paginatedItems.forEach(item => {
                            const div = document.createElement('div');
                            div.className = 'col-12 col-md-6 col-lg-4 mb-4';
                            div.innerHTML = `<div class="border border-1 border-dark">
                                                <div class="d-flex justify-content-between align-items-center text-uppercase px-2 py-0 my-2">
                                                    <p class="py-0 my-0"> <b>${item} </b></p>
                                                    <button class="btn btnBuscar" type="button" data-bs-toggle="modal" data-bs-target="#modalEditarPieza">
                                                            <i class="fas fa-pencil-alt px-1 pt-0 pb-0"></i>
                                                            <span class="p-0 m-0">Editar<span>
                                                    </button>
                                                </div>

                                                <div class="d-flex justify-content-between px-2" style="width:100%" >
                                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, incidunt repellat pariatur quam quia quo tempora molestiae obcaecati fugit at vero similique maiores eum quis! At quibusdam optio accusantium architecto.</p>
                                                </div>

                                                <div class="d-flex justify-content-start px-2 py-2">
                                                    <img src="../img/imagen.png" style="width: 100px; height:100px">
                                                </div>
                                            </div>`;

                            container.appendChild(div);
                        });
                    //Fin Listado de los items registrados del catalogo
                    
                    updatePagination();
                }
        //Fin funcion para mostrar los divs de los items 


        // Función para actualizar la paginación
            function updatePagination() {
                    const paginationContainer = document.getElementById('pagination');
                    paginationContainer.innerHTML = ''; // Limpiar contenido anterior
                    const totalPages = Math.ceil(items.length / resultsPerPage);

                    for (let page = 1; page <= totalPages; page++) {
                        const li = document.createElement('li');
                        li.className = `page-item ${page === currentPage ? 'active' : ''}`;
                        li.innerHTML = `<a class='page-link' href='#'>${page}</a>`;
                        li.addEventListener('click', (e) => {
                            e.preventDefault();
                            currentPage = page;
                            displayItems(currentPage);
                        });
                        paginationContainer.appendChild(li);
                    }
                }

            // Inicializar la vista
            displayItems(currentPage);
        //Fin de la funcion para actualizar la paginacion

        
        // Interaccion del formulario para registrar un item
            const circles = document.querySelectorAll('.circle');
            const lines = document.querySelectorAll('.line');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const sendBtn = document.getElementById('sendBtn');
            var miFormulario = document.getElementById('miFormulario');

            let currentStep = 0;

            function updateProgress() {

                    circles.forEach((circle, index) => {
                        if (index <= currentStep) 
                            circle.classList.add('active');
                            
                        else 
                            circle.classList.remove('active');
                            
                    });

                    lines.forEach((line, index) => {
                        if (index < currentStep) 
                            line.classList.add('active');
                        else 
                            line.classList.remove('active');
                        
                    });

                    prevBtn.disabled = currentStep === 0;
                    nextBtn.disabled = currentStep === circles.length - 1;
                    
                        if(currentStep == (circles.length - 1)) {
                            sendBtn.style.display=' inline'
                            nextBtn.style.display = 'none'; 
                        }

                        else {
                                sendBtn.style.display = 'none'; 
                                nextBtn.style.display = 'inline'; 
                            }
            }

            prevBtn.addEventListener('click', () => {
                miFormulario.style.opacity=0
                setTimeout(function() {
                        document.getElementById(`seccion${(currentStep+1)}`).style.display = "none";
                        document.getElementById(`seccion${(currentStep+1) - 1}`).style.display = "block";              

                        if (currentStep > 0) {
                            currentStep--;
                            updateProgress();
                        }
                        miFormulario.style.opacity=1
                    }, 400)

                
            });

            nextBtn.addEventListener('click', () => {
                miFormulario.style.opacity=0
                setTimeout(function() {
                    document.getElementById(`seccion${ (currentStep+1)}`).style.display = "none";
                    document.getElementById(`seccion${(currentStep+1) + 1}`).style.display = "block";


                    if (currentStep < circles.length - 1) {
                        currentStep++;
                        updateProgress();
                    }
                    miFormulario.style.opacity=1
                }, 400)
            });
        //Fin de la  interaccion del formulario para registrar un item
    </script>