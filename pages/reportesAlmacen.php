<div class="container">
        <!-- Encabezado del Dashboard -->
        <div class="dashboard-header">
            <h1>
                <i class="fas fa-chart-line"></i> REPORTES DE ALMACEN
            </h1>
            <p class="mt-2">Visualización de datos y análisis de inventarios</p>
        </div>
        
        <!-- Filtros -->
        <div class="filters-container">
            <div class="filter-row">
                <div class="filter-group">
                    <div class="filter-label">Rango de Fechas</div>
                    <div class="d-flex gap-2">
                        <input type="date" class="filter-input" value="2023-01-01">
                        <input type="date" class="filter-input" value="2023-12-31">
                    </div>
                </div>
                
                <div class="filter-group">
                    <div class="filter-label">Categoría</div>
                    <select class="filter-select">
                        <option value="">Todas las categorías</option>
                        <option value="1">HOLDERS</option>
                        <option value="2">HERRAMIENTAS</option>
                        <option value="3">REFACCIONES</option>
                        <option value="4">CONSUMIBLES</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <div class="filter-label">Tipo de Reporte</div>
                    <select class="filter-select">
                        <option value="">Todos los reportes</option>
                        <option value="1">Consumo mensual</option>
                        <option value="2">Distribución por categoría</option>
                        <option value="3">Artículos más solicitados</option>
                        <option value="4">Tendencias anuales</option>
                    </select>
                </div>
                
                <div class="filter-group d-flex align-items-end">
                    <button class="btn w-100" style="background: var(--secondary); color: white; font-weight: 600;">
                        <i class="fas fa-filter me-2"></i> Aplicar Filtros
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Estadísticas Rápidas -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <div class="stat-value">1,248</div>
                <div class="stat-label">Artículos en Inventario</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <div class="stat-value">327</div>
                <div class="stat-label">Movimientos este Mes</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-truck-loading"></i>
                </div>
                <div class="stat-value">42</div>
                <div class="stat-label">Reabastecimientos</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="stat-value">18</div>
                <div class="stat-label">Artículos Bajos en Stock</div>
            </div>
        </div>
        
        <!-- Gráficos -->
        <div class="grid-container">
            <!-- Gráfico de Barras - Consumo por Mes -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3 class="chart-title">
                        <i class="fas fa-chart-bar"></i> Consumo Mensual de Artículos
                    </h3>
                    <div class="chart-actions">
                        <button class="chart-btn">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="chart-btn">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
            
            <!-- Gráfico de Pastel - Distribución por Categoría -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3 class="chart-title">
                        <i class="fas fa-chart-pie"></i> Distribución por Categoría
                    </h3>
                    <div class="chart-actions">
                        <button class="chart-btn">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="chart-btn">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
            
            <!-- Gráfico de Dispersión - Consumo vs Tiempo Reposición -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3 class="chart-title">
                        <i class="fas fa-braille"></i> Consumo vs Tiempo de Reposición
                    </h3>
                    <div class="chart-actions">
                        <button class="chart-btn">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="chart-btn">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="scatterChart"></canvas>
                </div>
            </div>
            
            <!-- Gráfico de Líneas - Tendencias Anuales -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3 class="chart-title">
                        <i class="fas fa-chart-line"></i> Tendencias de Consumo Anual
                    </h3>
                    <div class="chart-actions">
                        <button class="chart-btn">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="chart-btn">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Botón de Exportar -->

        <div class="d-flex justify-content-center">
            <button class="btn btnBuscar py-2">
                <i class="fas fa-file-export" style="font-size:25px;"></i> <span class=" fs-5"> Exportar Reporte</span>
            </button>
        </div>
    </div>
     

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioReportes',0)">
                 <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->