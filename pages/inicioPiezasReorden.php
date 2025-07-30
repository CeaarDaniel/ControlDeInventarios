<!--Formulario para buscar una pieza sin login-->
    <div class="d-flex justify-content-center align-content-center" style="width:100%">
        <form class=" d-flex justify-content-center flex-column flex-sm-row  formBuscarPieza">
            <select class="in mx-3 py-2" name="categoriaPieza" id="categoriaPieza">
                <option value="" selected>&#xf002; --- SELECCIONE UN TIPO DE PIEZA---</option>
                <option value="1">HOLDER</option>
                <option value="2">FERACCIONES</option>
                <option value="3">HERRAMIENTAS</option>
            </select>
            <div class="d-flex mt-1 justify-content-center">
                <button class="btn boton py-0 my-0">Buscar</button>
            </div>
        </form>
    </div>
<!-- Fin formulario para buscar una pieza sin login --->


<hr class="mx-0 px-0">

    <!-- Resultados de inventario -->
            <div class="inventory-container">
                <!-- Tarjeta de inventario 1 -->
                <div class="inventory-card" style="background: rgba(252, 243, 166, 0.8);">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="item1">
                            </div>
                        </div>
                        <div class="col-md-1 status-indicator">
                            <i class="fas fa-exclamation-triangle warning"></i>
                        </div>
                        <div class="col-md-2 item-image">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="col-md-8 item-details">
                            <h3 class="item-title">Soporte para Herramienta HLD-45</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="detail-label">Descripción:</span>
                                        <span>Soporte de alta precisión para herramientas de corte</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-layer-group"></i>
                                        <span class="detail-label">Stock:</span>
                                        <span class="badge bg-warning">5 unidades</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="detail-label">Fecha compra:</span>
                                        <span>15/03/2023</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-cogs"></i>
                                        <span class="detail-label">Proceso:</span>
                                        <span>Mecanizado CNC</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="detail-label">Ubicación:</span>
                                        <span>Almacén B, Estante 4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tarjeta de inventario 2 -->
                <div class="inventory-card" style="background: rgba(255, 175, 175, 0.3);">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="item2">
                            </div>
                        </div>
                        <div class="col-md-1 status-indicator">
                            <i class="fas fa-exclamation-circle danger"></i>
                        </div>
                        <div class="col-md-2 item-image">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="col-md-8 item-details">
                            <h3 class="item-title">Engranaje de Precisión EP-78</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="detail-label">Descripción:</span>
                                        <span>Engranaje de acero templado para transmisiones</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-layer-group"></i>
                                        <span class="detail-label">Stock:</span>
                                        <span class="badge bg-danger">2 unidades</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="detail-label">Fecha compra:</span>
                                        <span>22/05/2023</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-cogs"></i>
                                        <span class="detail-label">Proceso:</span>
                                        <span>Ensamblaje final</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="detail-label">Ubicación:</span>
                                        <span>Almacén A, Estante 7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tarjeta de inventario 3 -->
                <div class="inventory-card" style="background: rgba(212, 175, 255, 0.3);">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="item3">
                            </div>
                        </div>
                        <div class="col-md-1 status-indicator">
                            <i class="fas fa-check-circle" style="color: --var(dark)"></i>
                        </div>
                        <div class="col-md-2 item-image">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="col-md-8 item-details">
                            <h3 class="item-title">Fresa Diamantada FD-120</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="detail-label">Descripción:</span>
                                        <span>Fresa para acabados de precisión en metales</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-layer-group"></i>
                                        <span class="detail-label">Stock:</span>
                                        <span class="badge bg-success">24 unidades</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span class="detail-label">Fecha compra:</span>
                                        <span>10/01/2024</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <i class="fas fa-cogs"></i>
                                        <span class="detail-label">Proceso:</span>
                                        <span>Acabado superficial</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="detail-label">Ubicación:</span>
                                        <span>Almacén C, Estante 2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>