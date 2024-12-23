
<h4>Registro de material</h4>

<div class="d-flex aling-content-center justify-content-center" id="formulario" name="formulario">
            <!--Formulario de llenado-->
                <form id="formulario-llenado" class="form-control px-5 border border-secondary border-2 rounded" style="max-width:90%;">
                        <p class="p-3 text-center fs-5">
                            <b> DATOS GENERALES</b>
                        </p>

                        <div class="row m-0 px-0">
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NÚMERO DE NÓMINA</label>  
                                    <input class="in icon-input" id="NN" name="NN" type="number" style="width:70%;"  min=2 placeholder="&#xf2b9; Escriba su número de nómina" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NOMBRE</label>  
                                    <input class="in icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf02d; Nombre" style="max-width:70%;" readonly>
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" for="NN" style="max-width:240px;">DEPARTAMENTO</label>  
                                    <input class="in icon-input" id="DEPARTAMENTO" name="DEPARTAMENTO" type="text" placeholder="&#xf029; Departamento" style="width:70%;" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2 px-0">
                                <div class="d-flex flex-column flex-wrap">
                                    <label class="fw-bold" style="max-width:240px;">CÓDIGO SHOP</label>
                                    <select class="in icon-input" name="CODIGO_SHOP" id="CODIGO_SHOP" style="width:70%;" required>
                                        <option value="" selected="selected">&#xf02a; ---Código shop---</option>
                                        <option value="1110 JMEX PLUNGER (APZ y AVO)">1110 JMEX PLUNGER (APZ y AVO)</option>
                                        <option value="1111 APZ sleeve">1111 APZ sleeve</option>
                                        <option value="1112 AVO Cover">1112 AVO Cover</option>
                                        <option value="1113 AXO PISTON">1113 AXO PISTON</option>
                                        <option value="1120 STABILINK Manual">1120 STABILINK Manual</option>
                                        <option value="1121 STABILINK Automatica">1121 STABILINK Automatica</option>
                                        <option value="1122 STABILINK Automatica FORD">1122 STABILINK Automatica FORD</option>
                                        <option value="1130 CARRIER">1130 CARRIER</option>
                                        <option value="1131 HUB TWO WAY">1131 HUB TWO WAY</option>
                                        <option value="1140 CAP-BRG">1140 CAP-BRG</option>
                                        <option value="1150 B R K T">1150 B R K T</option>
                                        <option value="1160 COVER HUB">1160 COVER HUB </option>
                                        <option value="1160 PUM HUB">1160 PUM HUB</option>
                                        <option value="1160 VALEO">1160 VALEO</option>
                                        <option value="1170 HOUSING">1170 HOUSING</option>
                                        <option value="1170 NSK WARNER">1170 NSK WARNER</option>
                                        <option value="1180 HAL/AAM">1180 HAL/AAM</option>
                                        <option value="1180 OUTLET WATER">1180 OUTLET WATER</option>
                                        <option value="1190 Grupo Administracion">1190 Grupo Administracion</option>
                                        <option value="1210 MOLDES MX">1210 MOLDES MX</option>
                                        <option value="1220 MOLDES JP">1220 MOLDES JP</option>
                                        <option value="5210 Grupo de Administracion">5210 Grupo de Administracion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 px-0">
                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap"> 
                                        <label class="fw-bold" style="max-width:240px;">FECHA DE REGISTRO</label>
                                        <input id="FECHA_SOLICITUD" name="FECHA_SOLICITUD" class="in" type="date" style="max-width:360px;" value="<?php echo date("Y-m-d")?>" readonly>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap"> 
                                        <label class="fw-bold" style="max-width:240px;">FECHA DE REGISTRO</label>
                                        <input id="FECHA_SOLICITUD" name="FECHA_SOLICITUD" class="in" type="date" style="max-width:360px;" value="<?php echo date("Y-m-d")?>" readonly>
                                    </div>
                                </div>

                                <div class="col-12 my-2 px-0">
                                    <div class="d-flex flex-column flex-wrap"> 
                                        <label class="fw-bold" style="max-width:240px;">FECHA DEL PERMISO</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-xl-3 my-2">
                                    <label class="fw-bold" style="max-width:240px;">DEL</label>
                                    <input id="FECHA_PERMISOA" name="FECHA_PERMISOA" class="in" type="date" min="<?php echo date('Y-m-d', strtotime('-3 months')); ?>" max="<?php echo date('Y-m-d', strtotime('+ 1 year')); ?>" style="max-width:auto;" required/>
                                </div>
                                <div class="col-12 col-md-5 col-xl-3 my-2">
                                    <label class="fw-bold" style="max-width:240px;">AL</label>
                                    <input id="FECHA_PERMISOB" name="FECHA_PERMISOB" class="in" type="date" min="<?php echo date('Y-m-d', strtotime('-3 months')); ?>" max="<?php echo date('Y-m-d', strtotime('+ 1 year')); ?>" style="max-width:auto;" required/>
                                </div>
                                <div class="col-12 col-md-5 col-xl-3 my-2">
                                    <label class="fw-bold" style="max-width:240px;">DE</label>
                                    <input id="HORA1" name="HORA1" class="in" type="time" style="max-width:auto;" required/>
                                </div>
                                <div class="col-12 col-md-5 col-xl-3 my-2" style="max-width:240px;">
                                    <label class="fw-bold">A</label>
                                    <input id="HORA2" name="HORA2" class="in" type="time" style="max-width:auto;" required/>
                                </div>
                        </div>

                        <p class="p-3 text-center fs-5"><b> VIAJE DE TRABAJO</b></p>

                        <div class="row mx-0">
                            <div class="col-12 col-md-4 my-2">
                                <label class="fw-bold" style="max-width:280px;">CIUDAD</label>
                                <input id="CIUDAD" name="CIUDAD" class="in icon-input text-uppercase" type="text" maxlength=100 placeholder="&#xf072; Ciudad" style="max-width:100%" required>
                            </div>
                            <div class="col-12 col-md-5 my-2">
                                <label class="fw-bold px-0" style="max-width:310px">LUGAR (EMPRESA O INSTITUCIÓN)</label>
                                <input id="LUGAR" name="LUGAR" class="in icon-input text-uppercase" type="text" maxlength=100 placeholder="&#xf19c; Lugar" style="max-width:100%" required>
                            </div>
                            <div class="col-12 col-md-8 my-2">
                                <label class="fw-bold" style="max-width:300px;">MOTIVO</label>
                                <textarea id="MOTIVO" name="MOTIVO" class="in icon-input text-uppercase" rows="4" maxlength=500 placeholder="&#xf022; Motivo del permiso" style="width:100%" required></textarea>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <label class="fw-bold">REQUIER GASTO DE VIAJE</label>
                                <select class="in" name="GASTOS" id="GASTOS" style="width:150px" required>
                                    <option class="text-center" value="" selected>---GASTOS---</option>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                        </div>
                        
                        <p class="p-3 text-center fs-5"><b> DESGLOCE DE GASTOS</b></p>
                        <div class="row mx-0">
                            <div class="col my-1">
                                <label class="fw-bold">CASETAS</label>
                                <input id="CASETAS" name="CASETAS" class="in icon-input gastos" placeholder="&#xf187;" type="number" min=0 max=100000>
                            </div>
                            <div class="col my-1">
                                <label class="fw-bold">GASOLINA</label>
                                <input id="GASOLINA" name="GASOLINA" class="in icon-input gastos" placeholder="&#xf06d;" type="number" min=0 max=100000>
                            </div>
                            <div class="col my-1">
                                <label class="fw-bold">HOTEL</label>
                                <input id="HOTEL" name="HOTEL" class="in icon-input gastos" placeholder="&#xf1ad;" type="number" min=0 max=100000>
                            </div>
                            <div class="col my-1">
                                <label class="fw-bold">COMIDAS</label>
                                <input id="COMIDAS" name="COMIDAS" class="in icon-input gastos" placeholder="&#xf1fd;" type="number" min=0 max=100000>
                            </div>
                            <div class="col my-1">
                                <label class="fw-bold">TAXIS</label>
                                <input id="TAXI" name="TAXI" class="in icon-input gastos" placeholder="&#xf1ba;" type="number" min=0 max=100000>
                            </div>
                            <div class="col my-1">
                                <label class="fw-bold">OTROS</label>
                                <input id="OTROS" name="OTROS" class="in icon-input gastos" placeholder="&#xf02b;" type="number" min=0 max=100000>
                            </div>
                        </div>
                        <div class="my-3 px-2">
                            <label class="fw-bold">TOTAL</label>
                            <input id="TOTAL" name="TOTAL" class="in icon-input" placeholder="&#xf0d6;" type="number" readonly>
                        </div>
                        <input id="tipoPermiso" name="tipoPermiso" type="hidden" value="viajeTrabajo">
                        <input id="CANTDIAS" name="CANTDIAS" class="in icon-input" type="hidden" min=1 placeholder="&#xf185; Días del permiso" style="max-width:100%" readonly>
                </form>
            <!--Formulario de llenado-->