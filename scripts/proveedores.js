var btnRegistrarProveedor = document.getElementById("btnRegistrarProveedor")

/*Registrar un proveedor*/
    btnRegistrarProveedor.addEventListener( 'click', ()=> {
        var formProveedores = document.getElementById("registroProveedores"); 
        var isValid = formProveedores.reportValidity(); 
        if (isValid) {
            var formDataRegistrar = new FormData(formProveedores); 
            formDataRegistrar.append("opcion", "2");

            fetch("../api/proveedores.php", {
                method: "POST",
                body: formDataRegistrar,
                }).then((response) => response.text())
                .then((data) => {
                    alert(data);
                    mostrarProovedores(); 
                })
            .catch((error) => {
                console.log(error);
            });
        }   
    })
/*Fin registrar un proveedor*/

function validarSeccion(currentStepfm) {
    // Obtener todos los inputs de la sección específica
    var seccion = document.getElementById(`seccion${(currentStepfm)}`);
    var inputs = seccion.querySelectorAll("input, textarea, select");

    // Validar cada input
    var esValido = true;
    inputs.forEach(function(input) {
      if (!input.checkValidity()) {
        esValido = false;
        input.reportValidity();  // Mostrar el mensaje de error para este campo

        if (!input.classList.contains('invalido')) {
                input.classList.add('invalido');
                var mensajeError = document.createElement('div');
                mensajeError.innerHTML = "<p class='text-danger m-0 p-0'><b>***</b></p>";
                mensajeError.classList.add('invalido');
                input.insertAdjacentElement("beforebegin", mensajeError)
        }
            
      }

      else
      if (input.checkValidity()) {
        input.classList.remove('invalido');
        // Buscar el elemento hermano anterior (el div que contiene el mensaje de error) y eliminarlo si existe
        var mensajeError = input.previousElementSibling;
        if (mensajeError && mensajeError.classList.contains('invalido')) {
            mensajeError.remove();
        }
    }
    });

    return esValido;
  }

//Funcion para cargar el modal que permite editar los datos del registro de proveedor
function actualizarProveedor(event){
    var modalBodyProveedor = document.getElementById("modaleditarProvedorBody");
    const boton = event.target.closest("button"); // Accede al atributo data-id del botón que disparó el evento
    var idProveedor = boton.getAttribute('data-idProveedor');
    var nombreProveedor = boton.getAttribute('data-nombreProveedor');
    var clasificacion = boton.getAttribute('data-clasificacion');
    var tipoTrabajo = boton.getAttribute('data-tipoTrabajo');
    var descripcionTrabajo = boton.getAttribute('data-descripcionTrabajo');
    var observaciones = boton.getAttribute('data-observaciones');

    modalBodyProveedor.innerHTML = `<div class="d-flex justify-content-center" style="width:100%">
                                        <!--Fomulario editar proveedor -->
                                            <form id="registroProveedoresUpdate" class="formBuscarPieza" style="width:100%">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 my-1">
                                                        <label for=""><b>NOMBRE DEL PROVEEDOR</b></label> <br>
                                                        <input id="nombreProveedorU" name="nombreProveedorU" class="in" type="text" placeholder="&#xf02d; Nombre del Proveedor" maxlength="200" value="${nombreProveedor}">
                                                    </div>
                                                    <div class="col-12 col-sm-6 my-1">
                                                        <label for="text"><b>CLASIFICACIÓN</b></label> <br>
                                                        <input id="clasificacionU" name="clasificacionU" type="text" class="in" placeholder="&#xf2b9; Clasificación" maxlength="20" value="${clasificacion}">
                                                    </div>
                                                    <div class="col-12 col-sm-6 my-1">
                                                        <label for="text"><b>TIPO DE TRABAJO</b></label><br>
                                                        <input id="tipoTrabajoU" name="tipoTrabajoU" type="text" class="in" placeholder="&#xf0ac; Tipo de trabajo" maxlength="100" value="${tipoTrabajo}">
                                                    </div>
                                                    <div class="col-12 col-sm-6 my-1">
                                                        <label for="text"><b>DESCRIPCIÓN DE TRABAJO</b></label><br>
                                                        <input id="descripcionTrabajoU" name="descripcionTrabajoU" type="text" class="in" placeholder="&#xf095; Descripción de trabajo" maxlength="100" value=${descripcionTrabajo}>
                                                    </div>
                                                    <div class="col-12 col-sm-6 my-1">
                                                        <label for="text"><b>OBSERVACIONES</b></label><br>
                                                        <textarea id="observacionesU" name="observacionesU" type="text" class="in" placeholder="&#xf0e0; Observaciones" maxlength="100">${observaciones}</textarea>
                                                    </div>

                                                    <input id="idProveedor" name="idProveedor" type="hidden" value="${idProveedor}">
                                                </div>

                                            <!--Boton para registrar al proveedor-->
                                                <div class="d-flex justify-content-center my-2" style="width:100%">
                                                    <button id="btnEditarProveedor" name="btnEditarProveedor" onclick=editarProveedor()  class="btn boton" type="button">
                                                        <i class="fas fa-search mx-1 py-1" style="font-size:20px;"></i> Actualizar
                                                    </button>
                                                </div>
                                            <!--Fin Boton para registrar al proveedor-->
                                            </form>
                                        <!--Fomulario editar proveedor -->
                                    </div>`;
}

/*Funcion para actualizar tabla de reportes en la seccion de el panel o editar permisos*/
    function mostrarProovedores() {
        var ancho = window.innerWidth;
        var requestOptions = {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'opcion=1'
        };

        fetch('../api/proveedores.php', requestOptions)
            .then(response => response.text())
            .then((data) => {

                var response = JSON.parse(data);
                //Resetear el dataTable
                $('#tableProvedores').DataTable().clear();  //Limpiar las columnas
                $('#tableProvedores').DataTable().destroy(); //Restaurar la tablas

                //Crear el dataTable con las nuevas configuraciones
                $('#tableProvedores').DataTable({
                    responsive: true,
                    scrollX: (ancho - 50),
                    scrollY: 370,
                    scrollCollapse: true,
                    data: response,
                    columns: [
                        { "data": "ID" },  
                        { "data": "NOMBRE" },
                        { "data": "CLASIFICACION" },
                        { "data": "TRABAJO" }, 
                        { "data": "DESCRIPCION" },
                        { "data": "OBSERVACIONES" },
                        { "data": "OPERACIONES" }
                    ]
                });

            }).catch(error => {
                console.log('Error:', error);

                $('#myTable').DataTable().clear();
                $('#myTable').DataTable().destroy();
                $('#myTable').DataTable();
            });
    }
/*Fin actualizar tabla de reportes */

/*Actualizar datos de un proveedor*/
    function editarProveedor(){
        var fmlProveedor = document.getElementById("registroProveedoresUpdate");
        var isValid = fmlProveedor.reportValidity();

        if (isValid) {
            var formData = new FormData(fmlProveedor);
            formData.append("opcion",3);

            fetch("../api/proveedores.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.text())
                .then((data) => {
                    alert(data);
                })
                .catch((error) => {
                console.log(error);
                });
        }
    }
/*Fin actualizar datos de un proveedor*/

/*Borrar registro de un proveedor*/
    function eliminarProveedor(event){
        const boton = event.target.closest("button");
        var idProveedor = boton.getAttribute('data-idProveedo3r');

        var formData = new FormData(); 
            formData.append("opcion",4);
            formData.append("idProveedor",idProveedor);

            fetch("../api/proveedores.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.text())
                .then((data) => {
                    alert(data);
                    mostrarProovedores();
                })
                .catch((error) => {
                console.log(error);
                });
    }
/*Fin Borrar registro de un proveedor*/

mostrarProovedores();