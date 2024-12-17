//Funcon para navegar entre ventanas
function navigation(pagina, id) {
    var contenido = document.getElementById("contenido"); //Etiqueta padre sobre la que se carga el contenido
    var animacion = document.querySelector("#contenido");

    console.log(animacion)
    animacion.classList.toggle("ocultar"); //agrega la clase para la transicion de la pantalla

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            window.scroll(0, 0);
                // Esperar un breve tiempo antes de cambiar el contenido para visualizar la transicion
                setTimeout(function() {
                    contenido.innerHTML = this.responseText;
                    animacion.classList.toggle("ocultar"); //quita la clase paral a transicion para restaurar los valores de la ventana 
                    new DataTable('#tableHistorialCompras', {
                        responsive: true,
                        scrollY: 370,
                        scrollCollapse: true,
                    });

                    new DataTable('#tableHistorialSalidas', {
                        responsive: true,
                        scrollY: 370,
                        scrollCollapse: true,
                    });
                //mostrar_autos();
                }.bind(this), 400);  //tiempo del setTime
            }
        };


    xhttp.open('POST', pagina + '.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id='+id);
}
//Fina de la funcion para navegar entre ventanas