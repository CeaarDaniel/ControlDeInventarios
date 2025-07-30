<!--Inicio Modal actualizr datos de provedor-->
    <div class="modal fade" id="modaleditarProvedor" tabindex="-1" aria-labelledby="modaleditarProvedor" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b> ACTUALIZAR DATOS DE PROVEEDOR </b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modaleditarProvedorBody" class="modal-body">
                    
                </div>
            </div>
        </div> 
    </div>
<!--Fin modal actualizar datos de provedor-->

<p class="fs-5 text-center">REGISTRO DE PROVEEDORES</p>

    <!--Inicio Formulario de registro de proovedores -->
        <div class="d-flex justify-content-center" style="width:100%">
            <!--
                <form id="registroProveedores" class="formBuscarPieza" style="width:100%">
                    <div class="row">
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for=""><b>NOMBRE DEL PROVEEDOR</b></label> <br>
                            <input id="nombreProveedor" name="nombreProveedor" type="text" class="in" placeholder="&#xf02d; Nombre" maxlength="200" required>
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start">
                            <label for="text"><b>CLASIFICACIÓN</b></label> <br>
                            <input id="clasificacion" name="clasificacion" type="text" class="in" placeholder="&#xf2b9; Clasificacion" maxlength="20" required>
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for="text"><b>TIPO DE TRABAJO</b></label><br>
                            <input id="tipoTrabajo" name="tipoTrabajo" type="text" class="in" placeholder="&#xf0ac; Tipo de trabajo" maxlength="100" required>
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start">
                            <label for="text"><b>DESCRIPCIÓN DE TRABAJO</b></label><br>
                            <input id="descripcionTrabajo" name="descripcionTrabajo" type="text" class="in" placeholder="&#xf095; Descripcion de trabajo" maxlength="100">
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for="text"><b>OBSERVACIONES</b></label><br>
                            <textarea id="observaciones" name="observaciones" type="text" class="in" placeholder="&#xf0e0; Observaciones" maxlength="100"></textarea>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-center my-2" style="width:100%">
                        <button id="btnRegistrarProveedor" class="btn boton" type="button">
                            <i class="fa fa-cash-register mx-1 py-1" style="font-size:20px;"></i> 
                            <span>Registrar</span>
                        </button>
                    </div>
                </form> --> 

                 <div class="form-content">
            <div class="corner-decoration"></div>
            <div class="form-decoration"></div>
            <div class="form-decoration-2"></div>
            
            <form id="registroProveedores">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label required" for="nombreProveedor">
                            <i class="fas fa-building"></i> NOMBRE DEL PROVEEDOR
                        </label>
                        <div class="input-icon-container">
                            <i class="fas fa-signature input-icon"></i>
                            <input class="form-control" id="nombreProveedor" name="nombreProveedor" type="text" placeholder="Nombre" maxlength="200" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label required" for="clasificacion">
                            <i class="fas fa-tags"></i> CLASIFICACIÓN
                        </label>
                        <div class="input-icon-container">
                            <i class="fas fa-list input-icon"></i>
                            <input class="form-control" id="clasificacion" name="clasificacion" type="text" placeholder="Clasificación" maxlength="20" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label required" for="tipoTrabajo">
                            <i class="fas fa-briefcase"></i> TIPO DE TRABAJO
                        </label>
                        <div class="input-icon-container">
                            <i class="fas fa-tasks input-icon"></i>
                            <input class="form-control" id="tipoTrabajo" name="tipoTrabajo" type="text" placeholder="Tipo de trabajo" maxlength="100" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="descripcionTrabajo">
                            <i class="fas fa-file-alt"></i> DESCRIPCIÓN DE TRABAJO
                        </label>
                        <div class="input-icon-container">
                            <i class="fas fa-align-left input-icon"></i>
                            <input class="form-control" id="descripcionTrabajo" name="descripcionTrabajo" type="text" placeholder="Descripción de trabajo" maxlength="100">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="observaciones">
                            <i class="fas fa-sticky-note"></i> OBSERVACIONES
                        </label>
                        <div class="input-icon-container">
                            <i class="fas fa-comment-dots input-icon"></i>
                            <textarea class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" maxlength="100"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="form-btn">
                        <i class="fas fa-cash-register"></i> Registrar Proveedor
                    </button>
                </div>
            </form>
        </div>
        </div>
    <!--Fin Formulario de registro de proovedores -->


    <!--Tabla resultados de busqueda -->
        <div>
            <table id="tableProvedores" name="tableProvedores" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CLASIFICACION</th>
                        <th>TIPO DE TRABAJO</th>
                        <th>DESCRIPCION</th>
                        <th>OBSERVACIONES</th>
                        <th>OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>            
                </tbody>
            </table>
        </div>
    <!--Fin de la tabla de resultados de busquda -->

<!--
    <button class="btn btnBuscar" type="button" data-bs-toggle="modal" data-bs-target="#modalEditarPieza">
        <i class="fas fa-pencil-alt px-1 pt-0 pb-0"></i>
        <span class="p-0 m-0">Editar<span>
    </button>
-->

