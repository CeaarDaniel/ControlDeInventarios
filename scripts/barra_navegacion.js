var menu_btn = document.querySelector("#menu-btn")
var closeMenu_btn= document.querySelector("#closeMenu-btn")
var sidebar = document.querySelector("#sidebar")
var container = document.querySelector(".main")

//Mostrar el tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
//Fin mostrar el tooltipe


//Evento para mostrar/ocultar la barra de naveacion de acuerdo al tamaño de la pantalla
    window.addEventListener('resize', function (){
        if (window.innerWidth>=768){
            sidebar.classList.remove("active-nav")
            container.classList.remove("active-cont")
        }
    })
//Fin Evento para mostrar/ocultar

//Evento para mostrar/ocultar la barra de naveacion al presionar el boton
    menu_btn.addEventListener("click", () => {
        sidebar.classList.add("active-nav")
    })

    closeMenu_btn.addEventListener("click", () => {
        sidebar.classList.remove("active-nav")
    })
//Fin Evento para mostrar/ocultar la barra de naveacion al presionar el boton


//Agrandar la ventana al pasar el mouse
    sidebar.addEventListener("mouseover", () => {

        if (window.innerWidth>=768){
        sidebar.classList.add("active-nav")
        container.classList.add("active-cont")
        }
    })

    sidebar.addEventListener("mouseout", () => {
        if (window.innerWidth>=768){
        sidebar.classList.remove("active-nav")
        container.classList.remove("active-cont")
    }
    })
//Fin Agrandar la ventana al pasar el mouse
