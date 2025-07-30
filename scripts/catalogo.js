var nombreCategoria= document.getElementById("idCategoria_fk"); //SELECT DE CATEGORIA
var btnAgregarProceso= document.getElementById("btnAgregarProceso");  //BOTON "+" PARA LOS INPUT DE PROCESO Y TIEMPO DE VIDA
var btnEliminarProceso= document.getElementById("btnEliminarProceso");  // BOTON X PARA BORRAR LOS VALORES DE LOS INPUT
var valorCambio= document.getElementById("valorCambio");  //INPUT PARA CAPTURAR EL VALOR DE DOLAR PARA LA CONVERSION A PESOS
var costoPesos= document.getElementById("costoPesos"); //INPUT PARA LA CAPTURA DEL COSTO DE LA PIEZA EN PESOS
var costoDolar = document.getElementById("costoDolar");

document.getElementById('tiempoVida').addEventListener('keydown', function(event) {
    event.preventDefault();
  });

  document.getElementById('proceso').addEventListener('keydown', function(event) {
    event.preventDefault();
  });

var seccion3 = document.getElementById("seccion3");
nombreCategoria.addEventListener("change", modificarFormulario)
// Datos simulados
    const items = Array.from({ length: 10}, (_, i) => `Elemento ${i + 1}`);
    const resultsPerPage = 1;
    let currentPage = 1;

// Función para mostrar los divs de los items
    function displayItems(page) {

        const formDataPa = new FormData();

        fetch("./base_de_datos/operaciones_prestamos.php", {
            method: "POST",
            body: formDataPa,
        })
            .then((response) => response.json())
            .then((data) => {
                items = data
            })
            .catch((error) => {
            console.log("Error:", error);
            });

        const start = (page - 1) * resultsPerPage;
        const end = start + resultsPerPage;
        const paginatedItems = items.slice(start, end);
        const container = document.getElementById('itemContainer');
        container.innerHTML = ''; // Limpiar contenido anterior

                //Listado de los items registrados del catalogo
                paginatedItems.forEach(item => {
                    const div1 = document.createElement('div');
                    const div2 = document.createElement('div');
                    const div3 = document.createElement('div');
                    const div4 = document.createElement('div');
                    const div5 = document.createElement('div');
                    const div6 = document.createElement('div');

                    div1.className = 'col-12 col-md-6 col-lg-4 mb-4';
                    div2.className = 'col-12 col-md-6 col-lg-4 mb-4';
                    div3.className = 'col-12 col-md-6 col-lg-4 mb-4';
                    div4.className = 'col-12 col-md-6 col-lg-4 mb-4';
                    div5.className = 'col-12 col-md-6 col-lg-4 mb-4';
                    div6.className = 'col-12 col-md-6 col-lg-4 mb-4';

                    div1.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Soporte HLD-45</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Soporte de precisión para herramientas de corte CNC. Fabricado en acero templado.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-toolbox"></i>
                                </div>
                            </div>
                  `;

                div2.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Fresa Diamantada</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Fresa para acabados de precisión en metales. Diámetro 120mm, revestimiento diamantado.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-tools"></i>
                                </div>
                            </div>
                  `;

                div3.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Engranaje EP-78</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Engranaje de precisión para transmisiones industriales. Acero templado, 78 dientes.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-cog"></i>
                                </div>
                            </div>
                  `;

                    div4.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Tornillo T-45</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Tornillo de alta resistencia para maquinaria pesada. Acero inoxidable, cabeza hexagonal.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-screwdriver"></i>
                                </div>
                            </div>
                    `;

                    div5.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Bomba Hidráulica</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Bomba hidráulica de alta presión para sistemas de lubricación industrial.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-oil-can"></i>
                                </div>
                            </div>
                    `;

                    div6.innerHTML = `
                            <div class="item-card">
                                <div class="item-header">
                                    <h3 class="item-title">Sensor de Temperatura</h3>
                                    <button class="btn edit-btn" type="button">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </button>
                                </div>
                                <p class="item-description">
                                    Sensor de temperatura industrial con rango de -50°C a 250°C. Salida digital.
                                </p>
                                <div class="item-image">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                    `;

                    container.appendChild(div1);
                    container.appendChild(div2);
                    container.appendChild(div3);
                    container.appendChild(div4);
                    container.appendChild(div5);
                    container.appendChild(div6);
                });  
            //Fin Listado de los items registrados del catalogo
            
            updatePagination();
        }
//Fin funcion para mostrar los divs de los items 


// Función para actualizar la paginación
    function updatePagination() {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = ''; // Limpiar contenido anterior
            const totalPages = Math.ceil(items.length / resultsPerPage);

            for (let page = 1; page <= totalPages; page++) {
                const li = document.createElement('li');
                li.className = `page-item ${page === currentPage ? 'active' : ''}`;
                li.innerHTML = `<a class='page-link' href='#' >${page}</a>`;
                li.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = page;
                    displayItems(currentPage);
                });
                paginationContainer.appendChild(li);
            }
        }

    // Inicializar la vista
    displayItems(currentPage);
//Fin de la funcion para actualizar la paginacion


// Interaccion del formulario para registrar un item
    const circles = document.querySelectorAll('div.circleAgregar .circle');
    const lines = document.querySelectorAll('div.circleAgregar .line');
    const prevBtn = document.getElementById('prevBtn'); //Boton de regreso
    const nextBtn = document.getElementById('nextBtn'); //Boton de adelante
    const sendBtn = document.getElementById('sendBtn'); //Envio de formulario
    var miFormulario = document.getElementById('formularioAgregar'); //FORMULARIO PARA AGREGAR UN ITMEM

    let currentStep = 0;

    function updateProgress() {

            circles.forEach((circle, index) => {
                if (index <= currentStep) 
                    circle.classList.add('active');
                    
                else 
                    circle.classList.remove('active');
            });

            lines.forEach((line, index) => {
                if (index < currentStep) 
                    line.classList.add('active');
                else 
                    line.classList.remove('active');
            });

            prevBtn.disabled = currentStep === 0;
            nextBtn.disabled = currentStep === circles.length - 1;
            
                if(currentStep == (circles.length - 1)) {
                    sendBtn.style.display=' inline'
                    nextBtn.style.display = 'none'; 
                }

                else {
                        sendBtn.style.display = 'none'; 
                        nextBtn.style.display = 'inline'; 
                    }
    }

    prevBtn.addEventListener('click', () => {
        miFormulario.style.opacity=0
        setTimeout(function() {

            /* if(nombreCategoria.value=="2" && currentStep== 3){
                document.getElementById(`seccion${(currentStep+1)}`).style.display = "none";
                document.getElementById(`seccion${(currentStep+1) - 1}`).style.display = "block";  

                if (currentStep > 0) 
                    currentStep--; 
            } */

                document.getElementById(`seccion${(currentStep+1)}`).style.display = "none";
                document.getElementById(`seccion${(currentStep+1) - 1}`).style.display = "block";  

                if (currentStep > 0) {
                    currentStep--;
                    updateProgress();
                }

                miFormulario.style.opacity=1
            }, 400)

        
    });

    nextBtn.addEventListener('click', () => {
         //isValid = miFormulario.reportValidity();
         isValid = validarSeccion(currentStep+1);

        if(isValid)
            {   
                miFormulario.style.opacity=0
                setTimeout(function() {

                    /*
                    if(nombreCategoria.value=="2" && currentStep== 1){
                        document.getElementById(`seccion${ (currentStep+1)}`).style.display = "none";
                        document.getElementById(`seccion${(currentStep+1) + 1}`).style.display = "block";

                            if (currentStep < circles.length - 1) 
                                currentStep++;
                    } */

                    document.getElementById(`seccion${ (currentStep+1)}`).style.display = "none";
                    document.getElementById(`seccion${(currentStep+1) + 1}`).style.display = "block";


                    if (currentStep < circles.length - 1) {
                            currentStep++;
                        updateProgress();
                    }
                    miFormulario.style.opacity=1
                }, 400)

            }
    });

    sendBtn.addEventListener('click', ()=>{
        isValid = validarSeccion(currentStep+1);

        if(isValid){
            var formData = new FormData(miFormulario);
            formData.append("opcion", "2");
            var requestOptions = {
                method: 'POST',
                body: formData
            };
            fetch('../api/catalogo.php', requestOptions)
                .then(response => response.json())
                .then((data) => {
                    if(data.OK) {
                            console.log(data.OK)
                        fetch('../api/inventario.php', requestOptions)
                        .then(response => response.text())
                        .then((data) => {
                                alert(data)
                        }).catch(error => {
                            console.log('Error:', error);
                        })
                    }
                }).catch(error => {
                    console.log('Error:', error);
                })
        }
    })
//Fin de la  interaccion del formulario para registrar un item


/*Agregar procesos al formulario*/
btnAgregarProceso.addEventListener('click', function() {
    var procesoA = document.getElementById('procesoA').value; // Input para tomar el proceseso que se agregara al registro
    var tiempoVidaA = document.getElementById('tiempoVidaA').value; //Tiempo de vida correspondiente al proceso agregado

    if(nombreCategoria.value=='1' && (tiempoVidaA=="" || tiempoVidaA==null)) 
        tiempoVidaA='0'
    

    if ( procesoA!="" && procesoA!=null && tiempoVidaA!="" && tiempoVidaA!=null) {
        var proceso = document.getElementById('proceso'); // Valor que se insertara en la base de datos
        var tiempoVida = document.getElementById('tiempoVida'); //Valor que se insertara en la base de datos

        if (proceso.value !== "") {
            proceso.value = proceso.value+','+procesoA;
            tiempoVida.value = tiempoVida.value+','+tiempoVidaA; 
        } else {
            proceso.value = procesoA; // Si está vacío, simplemente asigna el nuevo valor
            tiempoVida.value = tiempoVidaA; 
        }
    }
})
/*Fin agregar proceso*/

/*Borrar proceso*/
    btnEliminarProceso.addEventListener('click', function(){
        document.getElementById('proceso').value='';
        document.getElementById('tiempoVida').value=''; 
    })
/*Fin Borrar proceso*/


//Funcion para calcular el costo en pesos 
costoDolar.addEventListener('change', function(){
 costoPesos.value = (valorCambio.value * costoDolar.value).toFixed(2);
    if(costoDolar.value!='' && costoDolar !=null) 
        costoPesos.disabled = true;

    else 
        costoPesos.disabled = false;
})

//Funcon para modificar el formulario dee acuerdo a la categoria del item
function modificarFormulario() {
    var categoria = nombreCategoria.value;    
    var tiempoVida = document.getElementById("tiempoVida");
    var proceso = document.getElementById("proceso");


    if(categoria=="1"){  //HOLDERS 
        document.querySelector('#tiempoVida').required = false; //false;
        document.querySelector('#proceso').required = true; //true;
        document.querySelector('#idLinea').required = true; //true;
        document.querySelector('#divminimo').style.display = 'block'
        document.querySelector('#divmaximo').style.display = 'block'
        document.querySelector('#divpuntoReorden').style.display = 'block' 
        document.querySelector('#rackGabeta').required = false;
        document.querySelector('#espacio').required = false; 
    }

    else 
        if(categoria=="2")   //HERRAMIENTA
        {
            document.querySelector('#tiempoVida').required = true; //true;
            document.querySelector('#proceso').required = true; //true;
            document.querySelector('#idLinea').required = true; //true;
            document.querySelector('#divminimo').style.display = 'none'
            document.querySelector('#divmaximo').style.display = 'none'
            document.querySelector('#divpuntoReorden').style.display = 'none'
            document.querySelector('#rackGabeta').required = false;
            document.querySelector('#espacio').required = false; 
        }

    else if(categoria=="3"){ //REFACCIONES
        document.querySelector('#tiempoVida').required = false; //false;
        document.querySelector('#proceso').required = false; //false;
        document.querySelector('#idLinea').required = false; //true;
        document.querySelector('#divminimo').style.display = 'block'
        document.querySelector('#divmaximo').style.display = 'block'
        document.querySelector('#divpuntoReorden').style.display = 'block'
        document.querySelector('#rackGabeta').required = true;
        document.querySelector('#espacio').required = true; 
    }
}

/*Funcion para validar el llendado de los inputs*/
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