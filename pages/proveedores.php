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
        .form-container {
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(7, 3, 139, 0.15);
            position: relative;
            z-index: 10;
        }
        
        /* Patrón decorativo en el encabezado */
        .form-header {
         
            background: linear-gradient(135deg, #07038b, #43004f);
            color: white;
            padding: 25px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .form-header::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .form-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .form-header h2 {
            font-weight: 700;
            margin: 0;
            font-size: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }
        
        .form-header h2 i {
            margin-right: 15px;
            font-size: 32px;
        }
        
        .form-content {
            padding: 30px;
            position: relative;
        }
        
        /* Decoración de esquina */
        .corner-decoration {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 80px 80px;
            border-color: transparent transparent #07038b transparent;
            opacity: 0.1;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        
        .form-group {
            flex: 0 0 50%;
            padding: 0 15px;
            margin-bottom: 25px;
            position: relative;
        }
        
        @media (max-width: 768px) {
            .form-group {
                flex: 0 0 100%;
            }
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: #331a42ff;
            margin-bottom: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
        
        .form-label i {
            margin-right: 10px;
            min-width: 24px;
            color: #4F378B;
            font-size: 18px;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 18px 14px 50px;
            border: 1px solid #d1d9e6;
            border-radius: 10px;
            background: #f8f9fc;
            font-size: 16px;
            transition: all 0.3s;
            color: #333;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #4ecdc4;
            box-shadow: 0 0 0 3px rgba(78, 205, 196, 0.2);
            background: white;
        }
        
        .input-icon-container {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #4F378B;
            font-size: 20px;
        }
        
        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .form-btn {
            border-radius: 15px;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            background: #141073;
            color: white;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 1);
        }
        
        .form-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            z-index: -1;
            transform: translateX(-100%);
            transition: transform 0.3s;
        }
        
        .form-btn:hover::before {
            transform: translateX(0);
        }
        
        .form-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(7, 3, 139, 0.4);
        }
        
        .required::after {
            content: " *";
            color: #ff6b6b;
        }
        
        /* Elemento decorativo en el contenido */
        .form-decoration {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, rgba(7, 3, 139, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
            border-radius: 50%;
            z-index: -1;
        }
        
        .form-decoration-2 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(7, 3, 139, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
            border-radius: 50%;
            z-index: -1;
         }
       
        /* Animaciones sutiles */
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
        
        .form-header h2 i {
            animation: float 3s ease-in-out infinite;
        }
        
        .form-group:nth-child(5) {
            flex: 0 0 100%;
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
                            <?php include('./incioProveedores.php')  ?>        
                </div>
            <!--Fin contenido principal de la pagina -->
    </section>

<!--- Fin contenido de la pagina --->


<!--Bostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Custom js -->
<script src="../scripts/barra_navegacion.js"></script>
<script src="../scripts/proveedores.js"></script>



</body>
</html>