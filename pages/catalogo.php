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
            --primary-dark: #07038b;
            --primary: #1a1a8d;
            --primary-light: #2c2ca0;
            --secondary: #ff6b6b;
            --accent: #4ecdc4;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
            --light-gray: #e9ecef;
        }
        
   
        .section-header {
            margin: 2rem 0 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .section-header h2 {
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 1.8rem;
            margin: 0;
        }
        
        .section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-dark), var(--accent));
            border-radius: 3px;
        }
        
        .filter-container {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            border: 1px solid rgba(7, 3, 139, 0.1);
        }
        
        .filter-label {
            font-weight: 500;
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .category-select {
            border-radius: 30px;
            border: 1px solid #ced4da;
            padding: 12px 20px;
            width: 100%;
            transition: all 0.3s;
            background-color: white;
            color: var(--dark);
            font-size: 1rem;
            font-weight: 500;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .category-select:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(7, 3, 139, 0.15);
            outline: none;
        }
        
        .search-container {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            border: 1px solid rgba(7, 3, 139, 0.1);
        }
        
        .search-input {
            border-radius: 30px;
            border: 1px solid #ced4da;
            padding: 12px 20px 12px 45px;
            width: 100%;
            transition: all 0.3s;
            background-color: white;
            font-size: 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .search-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(7, 3, 139, 0.15);
            outline: none;
        }
        
        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-light);
            font-size: 1.1rem;
        }
        
        .items-container {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            border: 1px solid rgba(7, 3, 139, 0.1);
        }
        
        .item-card {
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            background: white;
            border: 1px solid rgba(7, 3, 139, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .item-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-dark), var(--accent));
            border-radius: 5px 0 0 5px;
        }
        
        .item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .item-title {
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1.4rem;
            margin: 0;
        }
        
        .edit-btn {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-light));
            color: white;
            border: none;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        
        .edit-btn:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--accent));
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(7, 3, 139, 0.2);
        }
        
        .edit-btn i {
            margin-right: 8px;
        }
        
        .item-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .item-image {
            border-radius: 8px;
            overflow: hidden;
            background: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            margin-bottom: 1rem;
        }
        
        .item-image i {
            font-size: 3.5rem;
            color: var(--primary-light);
            opacity: 0.7;
        }
        
        .add-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-light));
            color: white;
            border: none;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 15px rgba(7, 3, 139, 0.3);
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .add-btn:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--accent));
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 20px rgba(7, 3, 139, 0.4);
        }
        
        .add-btn::after {
            content: 'Agregar';
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-dark);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            opacity: 0;
            transition: opacity 0.3s;
            white-space: nowrap;
        }
        
        .add-btn:hover::after {
            opacity: 1;
        }
        
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .pagination .page-item .page-link {
            color: var(--primary-dark);
            border: 1px solid rgba(7, 3, 139, 0.2);
            margin: 0 5px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-light));
            color: white;
            border-color: var(--primary-dark);
        }
        
        .pagination .page-item .page-link:hover {
            background: rgba(7, 3, 139, 0.1);
        }
        
        @media (max-width: 768px) {
            .item-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .edit-btn {
                margin-top: 10px;
                align-self: flex-end;
            }
            
            .add-btn {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    
<!--- Seccion del menu --->
    <?php include('../menu.php') ?>
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
                            <?php include('./inicioCatalogo.php') ?>        
                </div>
            <!--Fin contenido principal de la pagina -->
    </section>

<!--- Fin contenido de la pagina --->


<!--Bostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Custom js -->
<script src="../scripts/barra_navegacion.js"></script>
<script src="../scripts/catalogo.js"></script>
</body>
</html>