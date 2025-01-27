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
                })
            .catch((error) => {
                console.log(error);
            });
        }

   
    })
/*Fin registrar un proveedor*/


//Creacion del datatable
new DataTable('#tableProvedores', {
    responsive: true,
    scrollY: 370,
    scrollCollapse: true,
});

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



  