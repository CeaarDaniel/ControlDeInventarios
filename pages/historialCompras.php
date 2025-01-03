<!--Ventana de Historial de compras -->

    <!--Filtros para la busqueda de registros de compras -->
        <div class="row mx-5">
            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">TIPO DE PIEZA</label>
                    <select class="in me-sm-5 icon-input py-1" name="CODIGO_SHOP" id="CODIGO_SHOP" required>
                        <option value="" selected="selected">&#xf02c; --- CATEGORÍA  ---</option>
                        <option value="">HOLDERS</option>
                        <option value="">HERRAMIENTAS</option>
                        <option value="">REFACCIONES</option>
                        <option value="">CONSUMIBLES</option>
                        <option value="">INSERTOS</option>
                        <option value="">TORNILLOS</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">FECHA DE COMPRA</label>  
                    <input class="in icon-input" id="" name="" type="date" placeholder="&#xf02d; Fecha de compra">
                </div> 
            </div>

            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">NOMBRE/MODELO</label>  
                    <input class="in icon-input" id="" name="" type="text" placeholder="&#xf02d; Nombre de la pieza">
                </div> 
            </div>

            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CÓDIGO</label>  
                    <input class="in icon-input" id="" name="" type="text" placeholder="&#xf02a; ingrese algun valor">
                </div> 
            </div>
        </div>

        <div class="row mx-5">
            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO TOTAL</label>  
                    <input class="in icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0d6; Costo total de la compra">
                </div> 
            </div>

            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">CANTIDAD</label>  
                    <input class="in icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf0dc; Cantidad comprada">
                </div> 
            </div>

            <div class="col-12 col-sm my-2">
                <div class="d-flex flex-column flex-wrap">
                    <label class="fw-bold px-1" for="NN" style="max-width:240px;">COSTO UNITARIO </label>  
                    <input class="in icon-input" id="NOMBRE" name="NOMBRE" type="text" placeholder="&#xf155; Costo de la pieza">
                </div> 
            </div> 

            <div class="d-flex justify-content-center" style="width:100%">
                    <button class="btn boton">
                        Filtrar
                    </button>
            </div>
        </div>
    <!--Fin de filtros para la busqueda de registros de compras -->

    <!--Inicio de la tabla que muestra la busqueda de los registros de compras -->
        <table id="tableHistorialCompras" class="table table-striped nowrap" style="width:100%">
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
    <!--Fin de registro de la tabla que muestra la busqueda de los registros de compras -->

    <!--Boton de regreso -->
        <div class="d-grid gap-2 d-md-block my-5 px-5">
            <button class="volver" onclick="navigation('inicioReportes',0)">
             <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i>
            </button>
        </div>
    <!-- Fin boton de regreso-->

<!--Fin Ventana de historial de compras -->