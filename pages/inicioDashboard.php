<!-- Modal buscar pieza-->
<div class="modal fade" id="modalbuscarPieza" tabindex="-1" aria-labelledby="modalbuscarPieza" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b> BUSCAR UBICACION DE PIEZA </b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <?php include('../buscarPieza.php')?>
        </div>
    </div>
  </div> 
</div>
<!--Fin del modal buscar pieza-->


<!-- Modal resumen de inventario-->
    <div class="modal fade" id="modalResumenInventario" tabindex="-1" aria-labelledby="modalResumenInventario" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center text-center" style="width:100%"><b> RESUMEN DE INVENTARIO </b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Tabla resumen de inventario -->
                    <table id="tableResumen" class="table table-striped nowrap" style="width:100%">
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
                            </tr>
                            <tr>
                                <td>Jena</td>
                                <td>Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>$90,560</td>
                                <td>3814</td>
                                <td>j.gaines@datatables.net</td>
                            </tr>
                            <tr>
                                <td>Quinn</td>
                                <td>Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>$342,000</td>
                                <td>9497</td>
                                <td>q.flynn@datatables.net</td>
                            </tr>
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
                            </tr>
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
                            </tr>               
                        </tbody>
                    </table>
                    <!--Fin de resumen de inventario -->
                </div>
            </div>
        </div> 
    </div>
<!--Fin del modal resumen de inventario-->


    <!--Menu rapido -->
        <div class="row justify-content-center mx-0 px-0" style="max-width:100%;">
            <div class="col-xs-12 col-sm-6 col-lg-4 px-5 my-2">
                    <div class="d-flex flex-wrap justify-content-center align-content-center px-0 " style="height:100%;">
                        <a onclick="cargarContenido('SALIDA_DE_TRABAJO', 'SOLICITUD DE SALIDA DE TRABAJO')">
                            <div class="px-2 text-center justify-content-center" style="width: 18rem;">
                                <div class="pt-3 pb-4 px-0 card-body border border-2 border-secondary rounded shadow">
                                    <img src="../img/entrada_material.png" alt="" style="width: auto; max-height:100px">
                                    <p class="card-title"><b> ENTRADAS </b></p>
                                </div>
                            </div>
                        </a>  
                    </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4 px-5 my-2">
                    <div class="d-flex flex-wrap justify-content-center align-content-center px-0" style="height:100%;">
                        <a onclick="cargarContenido('SALIDA_DE_TRABAJO', 'SOLICITUD DE SALIDA DE TRABAJO')">
                            <div class="px-2 text-center justify-content-center" style="width: 18rem;">
                                <div class="pt-3 pb-4 px-0 card-body border border-2 border-secondary px-0 rounded shadow">
                                    <img src="../img/salida_material.png" alt="" style="width: auto; max-height:100px">
                                    <p class="card-title"><b> SALIDAS </b></p>
                                </div>
                            </div>
                        </a>  
                    </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4 px-5 my-2">
                    <div class="d-flex flex-wrap justify-content-center align-content-center px-0" style="height:100%;">
                        <a onclick="cargarContenido('SALIDA_DE_TRABAJO', 'SOLICITUD DE SALIDA DE TRABAJO')">
                            <div class=" text-center justify-content-center" style="width: 18rem;">
                                <div class="pt-3 pb-4 px-0 card-body border border-2 border-secondary rounded shadow">
                                    <img src="../img/registro_material.png" alt="" style="width: 100px; height:100px">
                                    <p class="card-title"> <b>REGISTRO DE MATERIAL </b></p>
                                </div>
                            </div>
                        </a>  
                    </div>
            </div>
        </div>
    <!--Menu rapido -->

    <!-- Resumen de inventario -->
        <h5 class="text-center mt-5 mb-5">
            <b> RESUMEN DE INVENTARIOS </b>
        </h5>

        <div class="row justify-content-center">

            <div class="col-xs-12 col-md-6 col-lg-4 px-5 my-4">
                <div class="border border-2 border-secondary rounded shadow">
                    <div class="d-flex justify-content-between px-0 py-0" style="width:100%" >
                        <p class="py-0 px-2 py-1 fs-5"><b> $ 923, 124.50 </b> </p>
                        <i class="fas fa-question-circle px-2 pt-2 pb-0 iconoResumen" data-bs-toggle="modal" data-bs-target="#modalResumenInventario"></i>
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0">
                        <img src="../img/gear.png" style="width: 100px; height:100px">
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0 my-0">
                        <p class="py-0 my-0">HOLDERS</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4 px-5 my-4">
                <div class="border border-2 border-secondary rounded shadow">
                    <div class="d-flex justify-content-between px-0 py-0" style="width:100%" >
                        <p class="py-0 px-2 py-1 fs-5"><b> $ 923, 124.50 </b> </p>
                        <i class="fas fa-question-circle px-2 pt-2 pb-0 iconoResumen" data-bs-toggle="modal" data-bs-target="#modalResumenInventario"></i>
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0">
                        <img src="../img/refacciones.png" style="width: auto; max-height:100px;">
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0 my-0">
                        <p class="py-0 my-0">REFACCIONES</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4 px-5 my-4">
                <div class="border border-2 border-secondary rounded shadow">
                    <div class="d-flex justify-content-between px-0 py-0" style="width:100%" >
                        <p class="py-0 px-2 py-1 fs-5"><b> $ 923, 124.50 </b> </p>
                        <i class="fas fa-question-circle px-2 pt-2 pb-0 iconoResumen" data-bs-toggle="modal" data-bs-target="#modalResumenInventario"></i>
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0">
                        <img src="../img/tools.png" style="width: auto; max-height:100px">
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0 my-0">
                        <p class="py-0 my-0">HERRAMIENTAS</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4 px-5 my-4">
                <div class="border border-2 border-secondary rounded shadow">
                    <div class="d-flex justify-content-between px-0 py-0" style="width:100%" >
                        <p class="py-0 px-2 py-1 fs-5"><b> $ 923, 124.50 </b> </p>
                        <i class="fas fa-question-circle px-2 pt-2 pb-0 iconoResumen" data-bs-toggle="modal" data-bs-target="#modalResumenInventario"></i>
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0">
                        <img src="../img/almacen.png" style="width: auto; max-height:100px">
                    </div>

                    <div class="d-flex justify-content-center px-2 py-0 my-0">
                        <p class="py-0 my-0">ALMACEN</p>
                    </div>
                    
                </div>
            </div>
        </div>
    <!--Fin de resumen de inventarios -->

    <!--Graficas -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <canvas id="myBarChart" ></canvas>
            </div>
            <div class="col-12 col-lg-6">
                <canvas id="myLineChart" ></canvas>
            </div>
            <div class="col-12 col-lg-6">
                <canvas id="myPieChart" ></canvas>
            </div>
            <div class="col-12 col-lg-6">
                <canvas id="myScatterChart" ></canvas>
            </div>
        </div>
    <!--Fin graficas -->
    
    <script>
                new DataTable('#tableResumen', {
                responsive: true
            });

            var ctx = document.getElementById('myBarChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'], // Etiquetas en el eje X
                datasets: [{
                label: 'Ventas',
                data: [12, 19, 3, 5], // Datos para cada barra
                backgroundColor: '#4f378b33',
                borderColor: '#4F378B',
                borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                y: {
                    beginAtZero: true // Iniciar el eje Y en 0
                }
                }
            }
            });

            var ctx = document.getElementById('myLineChart').getContext('2d');
            var myLineChart = new Chart(ctx, {
            type: 'line', // Tipo de gráfico
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'], // Etiquetas en el eje X
                datasets: [{
                label: 'Temperatura',
                data: [10, 15, 20, 25], // Datos para la línea
                borderColor: 'rgba(54, 162, 235, 1)',
                fill: false, // No llenar el área bajo la línea
                tension: 0.1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
            });

                var ctx = document.getElementById('myPieChart').getContext('2d');
                var myPieChart = new Chart(ctx, {
                type: 'pie', // Tipo de gráfico
                data: {
                    labels: ['Rojo', 'Azul', 'Amarillo'], // Etiquetas de los segmentos
                    datasets: [{
                    data: [30, 40, 30], // Tamaño de cada segmento
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                    borderWidth: 1
                    }]
                },
                options: {
                responsive: true,
                maintainAspectRatio: false,
            }
                });

                var ctx = document.getElementById('myScatterChart').getContext('2d');
                var myScatterChart = new Chart(ctx, {
                type: 'scatter', // Tipo de gráfico
                data: {
                    datasets: [{
                    label: 'Puntos de Datos',
                    data: [{
                        x: 10,
                        y: 20
                    }, {
                        x: 15,
                        y: 30
                    }, {
                        x: 20,
                        y: 10
                    }, {
                        x: 25,
                        y: 50
                    }, {
                        x: 24,
                        y: 31
                    }, {
                        x: 27,
                        y: 42
                    }, {
                        x: 28,
                        y: 43
                    }, 
                    {
                        x: 29,
                        y: 44
                    },
                    {
                        x: 30,
                        y: 45
                    },
                    {
                        x: 31,
                        y: 46
                    },
                    {
                        x: 32,
                        y: 47
                    },
                    {
                        x: 33,
                        y: 48
                    },
                    {
                        x: 34,
                        y: 49
                    },
                    {
                        x: 35,
                        y: 50
                    },
                    {
                        x: 8,
                        y: 20
                    }, {
                        x: 32,
                        y: 45
                    }, {
                        x: 25,
                        y: 17
                    }
                ],
                    backgroundColor: 'rgba(75, 192, 192, 1)',
                    }]
                },
                options: {
                responsive: true,
                maintainAspectRatio: false,
            }
                });
    </script>

    <!--Boton para volver a la pantalla anterior -->
        <button class="btn btnBuscar btnfloat" type="button"  data-bs-toggle="modal" data-bs-target="#modalbuscarPieza">
            <i class="fas fa-search mx-1 py-1" style="font-size:20px;"></i> <span class="p-0 m-0">Buscar<span>
        </button>
    <!--Fin Boton para volver a la pantalla anterior -->