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

       <style>
        :root {
            --primary: #a2d2ff;
            --secondary: #ffafcc;
            --accent: #cdb4db;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #bde0fe;
            --warning: #ffd166;
            --danger: #ff9aa2;
            --info: #c7f9cc;
            --pastel-blue: #a2d2ff;
            --pastel-pink: #ffafcc;
            --pastel-purple: #cdb4db;
            --pastel-green: #c7f9cc;
            --pastel-yellow: #ffd166;
        }
  
        .custom-header {
            background: linear-gradient(135deg, var(--pastel-blue), var(--pastel-purple));
            color: white;
            padding: 0.8rem 1rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .custom-header p {
            font-weight: 600;
            margin: 0;
            font-size: 1.2rem;
        }
        
        .custom-header .user-info {
            font-size: 0.9rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2px 12px;
        }
        
        .menu-btn {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            padding: 0;
            margin-right: 10px;
        }
        
        .section-title {
            text-align: center;
            margin: 1.5rem 0;
            color: var(--pastel-purple);
            font-weight: 600;
            font-size: 1.5rem;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--pastel-blue), var(--pastel-purple));
            margin: 5px auto 0;
            border-radius: 3px;
        }
        
        .search-form-container {
            background: white;
            border-radius: 15px;
            padding: 1.8rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            border: 1px solid rgba(162, 210, 255, 0.3);
        }
        
        .form-label {
            font-weight: 500;
            color: #5a5a5a;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control-custom {
            border-radius: 30px;
            border: 1px solid #dee2e6;
            padding: 12px 20px;
            width: 100%;
            transition: all 0.3s;
            background-color: #f8f9fa;
            position: relative;
            padding-left: 45px;
        }
        
        .form-control-custom:focus {
            border-color: var(--pastel-blue);
            box-shadow: 0 0 0 0.25rem rgba(162, 210, 255, 0.25);
            background-color: white;
        }
        
        .input-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--pastel-purple);
            z-index: 10;
            font-size: 1.1rem;
        }
        
        .input-group-custom {
            position: relative;
            margin-bottom: 1.2rem;
        }
        
        .search-btn {
            background: linear-gradient(135deg, var(--pastel-blue), var(--pastel-purple));
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: block;
            margin: 1.5rem auto 0;
            box-shadow: 0 4px 10px rgba(162, 210, 255, 0.4);
        }
        
        .search-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(162, 210, 255, 0.6);
        }
        
        .search-btn i {
            margin-right: 8px;
        }
        
        .results-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            max-height: 500px;
            overflow-y: auto;
            border: 1px solid rgba(162, 210, 255, 0.3);
        }
        
        .results-container::-webkit-scrollbar {
            width: 8px;
        }
        
        .results-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .results-container::-webkit-scrollbar-thumb {
            background: var(--pastel-blue);
            border-radius: 10px;
        }
        
        .result-card {
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            background-color: #f8f9fa;
            border-left: 4px solid var(--pastel-blue);
        }
        
        .result-card.warning {
            border-left: 4px solid var(--pastel-yellow);
            background-color: rgba(255, 209, 102, 0.08);
        }
        
        .result-card.danger {
            border-left: 4px solid var(--pastel-pink);
            background-color: rgba(255, 154, 162, 0.08);
        }
        
        .result-card.success {
            border-left: 4px solid var(--pastel-green);
            background-color: rgba(199, 249, 204, 0.2);
        }
        
        .status-indicator {
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .warning-color {
            color: var(--pastel-yellow);
        }
        
        .danger-color {
            color: var(--pastel-pink);
        }
        
        .success-color {
            color: var(--pastel-green);
        }
        
        .item-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .item-image i {
            font-size: 3.5rem;
            color: var(--pastel-purple);
            background: rgba(205, 180, 219, 0.15);
            border-radius: 50%;
            width: 90px;
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed var(--pastel-purple);
        }
        
        .item-title {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 1rem;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
        }
        
        .item-title i {
            margin-right: 10px;
            color: var(--pastel-purple);
        }
        
        .detail-item {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: flex-start;
        }
        
        .detail-item i {
            width: 25px;
            color: var(--pastel-blue);
            margin-right: 10px;
            font-size: 1.1rem;
            margin-top: 3px;
        }
        
        .detail-label {
            font-weight: 500;
            color: #6c757d;
            min-width: 100px;
        }
        
        .detail-value {
            color: #495057;
            font-weight: 500;
        }
        
        .stock-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .badge-warning {
            background-color: rgba(255, 209, 102, 0.2);
            color: #856404;
            border: 1px solid var(--pastel-yellow);
        }
        
        .badge-danger {
            background-color: rgba(255, 154, 162, 0.2);
            color: #721c24;
            border: 1px solid var(--pastel-pink);
        }
        
        .badge-success {
            background-color: rgba(199, 249, 204, 0.3);
            color: #155724;
            border: 1px solid var(--pastel-green);
        }
        
        @media (max-width: 768px) {
            .result-card .row > div {
                margin-bottom: 1rem;
            }
            
            .item-image {
                margin-bottom: 1rem;
            }
            
            .detail-item {
                flex-direction: column;
            }
            
            .detail-label {
                margin-bottom: 5px;
            }
            
            .form-control-custom {
                padding-left: 40px;
            }
            
            .input-icon {
                left: 15px;
            }
        }
    </style>
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

            <!-- Resultados de búsqueda -->
                <div class="results-container">
                    <h5 class="mb-4 text-center" style="color: var(--pastel-purple); font-weight: 600;">
                        <i class="fas fa-list me-2"></i>RESULTADOS DE BÚSQUEDA
                    </h5>
                    
                    <!-- Resultado 1 - Advertencia -->
                    <div class="result-card warning">
                        <div class="row">
                            <div class="col-md-1 d-flex align-items-center">
                                <div class="status-indicator">
                                    <i class="fas fa-exclamation-triangle warning-color"></i>
                                </div>
                            </div>
                            <div class="col-md-2 item-image">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <div class="col-md-9">
                                <h4 class="item-title">
                                    <i class="fas fa-cube"></i> Soporte para Herramienta HLD-45
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-info-circle"></i>
                                            <div>
                                                <div class="detail-label">Descripción:</div>
                                                <div class="detail-value">Soporte de alta precisión para herramientas de corte</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-boxes"></i>
                                            <div>
                                                <div class="detail-label">Stock:</div>
                                                <span class="stock-badge badge-warning">5 unidades</span>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-calendar-alt"></i>
                                            <div>
                                                <div class="detail-label">Fecha compra:</div>
                                                <div class="detail-value">15/03/2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-cogs"></i>
                                            <div>
                                                <div class="detail-label">Proceso:</div>
                                                <div class="detail-value">Mecanizado CNC</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div>
                                                <div class="detail-label">Ubicación:</div>
                                                <div class="detail-value">Almacén B, Estante 4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Resultado 2 - Peligro -->
                    <div class="result-card danger">
                        <div class="row">
                            <div class="col-md-1 d-flex align-items-center">
                                <div class="status-indicator">
                                    <i class="fas fa-exclamation-circle danger-color"></i>
                                </div>
                            </div>
                            <div class="col-md-2 item-image">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="col-md-9">
                                <h4 class="item-title">
                                    <i class="fas fa-cube"></i> Engranaje de Precisión EP-78
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-info-circle"></i>
                                            <div>
                                                <div class="detail-label">Descripción:</div>
                                                <div class="detail-value">Engranaje de acero templado para transmisiones</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-boxes"></i>
                                            <div>
                                                <div class="detail-label">Stock:</div>
                                                <span class="stock-badge badge-danger">2 unidades</span>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-calendar-alt"></i>
                                            <div>
                                                <div class="detail-label">Fecha compra:</div>
                                                <div class="detail-value">22/05/2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-cogs"></i>
                                            <div>
                                                <div class="detail-label">Proceso:</div>
                                                <div class="detail-value">Ensamblaje final</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div>
                                                <div class="detail-label">Ubicación:</div>
                                                <div class="detail-value">Almacén A, Estante 7</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Resultado 3 - Éxito -->
                    <div class="result-card success">
                        <div class="row">
                            <div class="col-md-1 d-flex align-items-center">
                                <div class="status-indicator">
                                    <i class="fas fa-check-circle success-color"></i>
                                </div>
                            </div>
                            <div class="col-md-2 item-image">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="col-md-9">
                                <h4 class="item-title">
                                    <i class="fas fa-cube"></i> Fresa Diamantada FD-120
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-info-circle"></i>
                                            <div>
                                                <div class="detail-label">Descripción:</div>
                                                <div class="detail-value">Fresa para acabados de precisión en metales</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-boxes"></i>
                                            <div>
                                                <div class="detail-label">Stock:</div>
                                                <span class="stock-badge badge-success">24 unidades</span>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-calendar-alt"></i>
                                            <div>
                                                <div class="detail-label">Fecha compra:</div>
                                                <div class="detail-value">10/01/2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <i class="fas fa-cogs"></i>
                                            <div>
                                                <div class="detail-label">Proceso:</div>
                                                <div class="detail-value">Acabado superficial</div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div>
                                                <div class="detail-label">Ubicación:</div>
                                                <div class="detail-value">Almacén C, Estante 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin de resultados de búsqueda -->
                </div>
            <!--Fin contenido principal de la pagina -->
    </section>

<!--- Fin contenido de la pagina --->


<!--Bostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


 <script>
        // Simulación de funcionalidad de búsqueda
        document.getElementById('btnBuscar').addEventListener('click', function() {
            const searchForm = document.querySelector('.formBuscarPieza');
            const resultsContainer = document.querySelector('.results-container');
            
            // Animación de búsqueda
            searchForm.style.opacity = '0.7';
            searchForm.style.transition = 'opacity 0.3s';
            
            setTimeout(() => {
                searchForm.style.opacity = '1';
                resultsContainer.style.display = 'block';
                
                // Scroll suave a los resultados
                resultsContainer.scrollIntoView({ behavior: 'smooth' });
            }, 800);
        });
        
        // Simulación de cambio de estado
        document.querySelectorAll('.result-card').forEach(card => {
            card.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    </script>

    
<!--Custom js -->
<script src="../scripts/barra_navegacion.js"></script>
</body>
</html>