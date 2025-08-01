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
        .header h1 {
            font-weight: 600;
            margin: 0;
        }
        
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .search-form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }
        
        .search-form select, .search-form button {
            border-radius: 30px;
            border: none;
        }
        
        .search-form select {
            flex-grow: 1;
            padding: 10px 20px;
            background-color: var(--light);
            min-width: 250px;
        }
        
        .search-form button {
            background-color: var(--accent);
            color: white;
            padding: 10px 25px;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .search-form button:hover {
            background-color: var(--primary);
            transform: translateY(-2px);
        }
        
        .search-form button i {
            margin-right: 8px;
        }
        
        .inventory-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            max-height: 65vh;
            overflow-y: auto;
        }
        
        .inventory-container::-webkit-scrollbar {
            width: 8px;
        }
        
        .inventory-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .inventory-container::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .inventory-card {
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }
        
        .inventory-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .status-indicator {
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .warning {
            color: var(--warning);
        }
        
        .danger {
            color: var(--danger);
        }
        
        .item-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .item-image i {
            font-size: 3.5rem;
            color: var(--accent);
            background: rgba(199, 166, 218, 0.2);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .item-details {
            padding-left: 1.5rem;
        }
        
        .item-title {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .detail-item {
            margin-bottom: 0.8rem;
            display: flex;
        }
        
        .detail-item i {
            width: 25px;
            color: var(--primary);
            margin-right: 10px;
        }
        
        .detail-label {
            font-weight: 500;
            color: var(--dark);
            min-width: 120px;
        }
        
        .footer {
            text-align: center;
            padding: 1.5rem 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .search-form {
                flex-direction: column;
            }
            
            .search-form select, .search-form button {
                width: 100%;
            }
            
            .item-details {
                padding-left: 0;
                padding-top: 1.5rem;
            }
            
            .detail-item {
                flex-direction: column;
            }
            
            .detail-label {
                margin-bottom: 5px;
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
                            <?php  include('./inicioPiezasReorden.php') ?>        
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