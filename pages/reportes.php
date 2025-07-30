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
            --primary: #07038b;
            --secondary: #4ecdc4;
            --accent: #ff6b6b;
            --light: #f8f9fa;
            --dark: #343a40;
            --chart-blue: #1e88e5;
            --chart-green: #43a047;
            --chart-orange: #ff9800;
            --chart-purple: #9c27b0;
            --chart-red: #e53935;
            --chart-teal: #00897b;
        }
        
        
        .dashboard-header {
            background: linear-gradient(135deg, var(--primary), #1a1a8d);
            color: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(7, 3, 139, 0.3);
        }
        
        .dashboard-header h1 {
            font-weight: 700;
            margin: 0;
            font-size: 2.2rem;
            display: flex;
            align-items: center;
        }
        
        .dashboard-header h1 i {
            margin-right: 15px;
            font-size: 2.5rem;
        }
        
        .filters-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .filter-group {
            flex: 1 1 200px;
        }
        
        .filter-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
        }
        
        .filter-select, .filter-input {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            width: 100%;
            background-color: white;
            font-weight: 500;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .filter-select:focus, .filter-input:focus {
            border-color: var(--secondary);
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(78, 205, 196, 0.25);
        }
        
        .chart-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }
        
        .chart-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 5px 0 0 5px;
        }
        
        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .chart-title {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.4rem;
            margin: 0;
            display: flex;
            align-items: center;
        }
        
        .chart-title i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        .chart-actions {
            display: flex;
            gap: 10px;
        }
        
        .chart-btn {
            background: rgba(78, 205, 196, 0.15);
            color: var(--primary);
            border: none;
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .chart-btn:hover {
            background: rgba(78, 205, 196, 0.3);
            transform: translateY(-2px);
        }
        
        .chart-wrapper {
            position: relative;
            height: 300px;
            width: 100%;
        }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 25px;
            margin-bottom: 2rem;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 10px 0;
            color: var(--primary);
        }
        
        .stat-label {
            font-weight: 600;
            color: var(--dark);
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .stat-icon {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }
        
        .export-btn {
            background: linear-gradient(135deg, var(--primary), #2c2ca0);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 2rem auto;
            box-shadow: 0 6px 15px rgba(7, 3, 139, 0.3);
        }
        
        .export-btn:hover {
            background: linear-gradient(135deg, #2c2ca0, var(--secondary));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(7, 3, 139, 0.4);
        }
        
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
            
            .stats-container {
                grid-template-columns: 1fr 1fr;
            }
            
            .dashboard-header h1 {
                font-size: 1.8rem;
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
                    <?php  include('inicioReportes.php')?>        
                </div>
            <!--Fin contenido principal de la pagina -->
    </section>

<!--- Fin contenido de la pagina --->


<!--Bostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Custom js -->
<script src="../scripts/barra_navegacion.js"></script>
<script src="../scripts/reportes.js"></script>

    <script>
            // Animaciones para las tarjetas
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.transform = 'translateY(-20px)';
                    card.style.opacity = '0';
                    card.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        card.style.transform = 'translateY(0)';
                        card.style.opacity = '1';
                    }, 300);
                }, index * 150);
            });
        
    </script>
</body>
</html>