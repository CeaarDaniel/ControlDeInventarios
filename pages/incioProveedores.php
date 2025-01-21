<!--Inicio Modal actualizr datos de provedor-->
    <div class="modal fade" id="modaleditarProvedor" tabindex="-1" aria-labelledby="modaleditarProvedor" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b> ACTUALIZAR DATOS DE PROVEEDOR </b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center" style="width:100%">
                        <!--Fomulario editar proveedor -->
                            <form id="RegistroProveedores" class="formBuscarPieza" style="width:100%">
                                <div class="row">
                                    <div class="col-12 col-sm-6 my-1">
                                        <label for=""><b>NOMBRE O RAZÓN SOCIAL</b></label> <br>
                                        <input class="in" type="text" placeholder="&#xf02d; Nombre">
                                    </div>
                                    <div class="col-12 col-sm-6 my-1">
                                        <label for="text"><b>NÚMERO DE IDENTIFICACIÓN FISCAL</b></label> <br>
                                        <input id="" name="" type="text" class="in" placeholder="&#xf2b9; Identificacion fiscal" maxlength="">
                                    </div>
                                    <div class="col-12 col-sm-6 my-1">
                                        <label for="text"><b>DIRECCIÓN</b></label><br>
                                        <input id="" name="" type="text" class="in" placeholder="&#xf0ac; Direccion">
                                    </div>
                                    <div class="col-12 col-sm-6 my-1">
                                        <label for="text"><b>TELÉFONO DE CONTACTO</b></label><br>
                                        <input id="" name="" type="text" class="in" placeholder="&#xf095; Telefono de contacto" >
                                    </div>
                                    <div class="col-12 col-sm-6 my-1">
                                        <label for="text"><b>CORREO ELECTRÓNICO</b></label><br>
                                        <input id="" name="" type="text" class="in" placeholder="&#xf0e0; Correo electronico">
                                    </div>
                                </div>

                            <!--Boton para registrar al proveedor-->
                                <div class="d-flex justify-content-center my-2" style="width:100%">
                                    <button class="btn boton" type="button">
                                        <i class="fas fa-search mx-1 py-1" style="font-size:20px;"></i> Registrar
                                    </button>
                                </div>
                            <!--Fin Boton para registrar al proveedor-->
                            </form>
                        <!--Fomulario editar proveedor -->
                    </div>
                </div>
            </div>
        </div> 
    </div>
<!--Fin modal actualizar datos de provedor-->

<p class="fs-5 text-center">REGISTRO DE PROVEEDORES</p>

    <!--Inicio Formulario de registro de proovedores -->
        <div class="d-flex justify-content-center" style="width:100%">
                <form id="RegistroProveedores" class="formBuscarPieza" style="width:100%">
                    <div class="row">
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for=""><b>NOMBRE O RAZÓN SOCIAL</b></label> <br>
                            <input type="text" class="in" placeholder="&#xf02d; Nombre ">
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start">
                            <label for="text"><b>NÚMERO DE IDENTIFICACIÓN FISCAL</b></label> <br>
                            <input id="" name="" type="text" class="in" placeholder="&#xf2b9; Identificacion fiscal">
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for="text"><b>DIRECCIÓN</b></label><br>
                            <input id="" name="" type="text" class="in" placeholder="&#xf0ac; Direccion">
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start">
                            <label for="text"><b>TELÉFONO DE CONTACTO</b></label><br>
                            <input id="" name="" type="text" class="in" placeholder="&#xf095; Telefono de contacto">
                        </div>
                        <div class="col-12 col-sm-6 my-1 mx-0 py-0 text-start text-sm-end">
                            <label for="text"><b>CORREO ELECTRÓNICO</b></label><br>
                            <input id="" name="" type="text" class="in" placeholder="&#xf0e0; Correo electronico">
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-center my-2" style="width:100%">
                        <button class="btn boton" type="button">
                            <i class="fa fa-cash-register mx-1 py-1" style="font-size:20px;"></i> 
                            <span>Registrar</span>
                        </button>
                    </div>
                </form>
        </div>
    <!--Fin Formulario de registro de proovedores -->


    <!--Tabla resultados de busqueda -->
        <div>
            <table id="tableProvedores" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Extn.</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>5421</td>
                        <td>t.nixon@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett</td>
                        <td>Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                        <td>8422</td>
                        <td>g.winters@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton</td>
                        <td>Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                        <td>1562</td>
                        <td>a.cox@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cedric</td>
                        <td>Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                        <td>6224</td>
                        <td>c.kelly@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi</td>
                        <td>Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                        <td>5407</td>
                        <td>a.satou@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Brielle</td>
                        <td>Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                        <td>4804</td>
                        <td>b.williamson@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Herrod</td>
                        <td>Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                        <td>9608</td>
                        <td>h.chandler@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rhona</td>
                        <td>Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                        <td>6200</td>
                        <td>r.davidson@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Colleen</td>
                        <td>Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                        <td>2360</td>
                        <td>c.hurst@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sonya</td>
                        <td>Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                        <td>1667</td>
                        <td>s.frost@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Colleen</td>
                        <td>Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                        <td>2360</td>
                        <td>c.hurst@datatables.net</td>
                        <td>
                            <button class="btn btn-danger my-0 mx-1 btn-eliminar" onclick="eliminarRegistro(12)" data-id="12"><i class="fas fa-trash"></i></button>
                            <button class="btn boton my-0 mx-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modaleditarProvedor" onclick="editarRegistro(event)" data-id="12" data-nn="7" data-nombre="GARCIA MORALES JUAN MANUEL" data-departamento="INGENIERIA" data-codigo_shop="2110 Grupo Ingenieria" data-fecha_solicitud="2024-03-08 00:00:00.000" data-fecha_permisoa="2024-03-08" data-fecha_permisob="2024-03-08" data-hora1="15:30" data-hora2="17:36" data-motivo="permuta" data-solicitado="" data-fechapermu1="2024-02-19" data-horariopermu1="17:36" data-horariopermu2="19:36" data-fechapermu2="1900-01-01" data-horariopermu3="00:00" data-horariopermu4="00:00" data-fechapermu3="1900-01-01" data-horariopermu5="00:00" data-horariopermu6="00:00" data-hrstrabajadas1="2:0" data-hrstrabajadas2="0:0" data-hrstrabajadas3="0:0" data-totalhrsacumu="2:0"><i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>               
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

