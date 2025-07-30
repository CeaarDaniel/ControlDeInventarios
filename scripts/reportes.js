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

                    cargarGraficas()
                //mostrar_autos();
                }.bind(this), 400);  //tiempo del setTime
            }
        };


    xhttp.open('POST', pagina + '.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id='+id);
}
//Fina de la funcion para navegar entre ventanas


function cargarGraficas(){
              // Datos de ejemplo
            const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            const categories = ['HOLDERS', 'HERRAMIENTAS', 'REFACCIONES', 'CONSUMIBLES', 'TORNILLOS'];
            const topItems = ['Soporte HLD-45', 'Fresa Diamantada', 'Engranaje EP-78', 'Tornillo T-45', 'Sensor Temp'];
        
                     // Gráfico de Barras - Consumo por Mes
            const barCtx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Consumo de Artículos',
                        data: [85, 120, 98, 150, 180, 210, 240, 190, 160, 140, 110, 95],
                        backgroundColor: [
                            'rgba(30, 136, 229, 0.8)',
                            'rgba(67, 160, 71, 0.8)',
                            'rgba(255, 152, 0, 0.8)',
                            'rgba(156, 39, 176, 0.8)',
                            'rgba(229, 57, 53, 0.8)',
                            'rgba(0, 137, 123, 0.8)',
                            'rgba(30, 136, 229, 0.8)',
                            'rgba(67, 160, 71, 0.8)',
                            'rgba(255, 152, 0, 0.8)',
                            'rgba(156, 39, 176, 0.8)',
                            'rgba(229, 57, 53, 0.8)',
                            'rgba(0, 137, 123, 0.8)'
                        ],
                        borderColor: [
                            'rgb(30, 136, 229)',
                            'rgb(67, 160, 71)',
                            'rgb(255, 152, 0)',
                            'rgb(156, 39, 176)',
                            'rgb(229, 57, 53)',
                            'rgb(0, 137, 123)',
                            'rgb(30, 136, 229)',
                            'rgb(67, 160, 71)',
                            'rgb(255, 152, 0)',
                            'rgb(156, 39, 176)',
                            'rgb(229, 57, 53)',
                            'rgb(0, 137, 123)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: { size: 14 },
                            bodyFont: { size: 13 }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Cantidad de Artículos',
                                font: { weight: 'bold' }
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Meses del Año',
                                font: { weight: 'bold' }
                            }
                        }
                    }
                }
            });
            
            // Gráfico de Pastel - Distribución por Categoría
            const pieCtx = document.getElementById('pieChart').getContext('2d');
            const pieChart = new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Distribución por Categoría',
                        data: [25, 20, 15, 30, 10],
                        backgroundColor: [
                            'rgba(30, 136, 229, 0.8)',
                            'rgba(67, 160, 71, 0.8)',
                            'rgba(255, 152, 0, 0.8)',
                            'rgba(156, 39, 176, 0.8)',
                            'rgba(229, 57, 53, 0.8)'
                        ],
                        borderColor: [
                            'rgb(30, 136, 229)',
                            'rgb(67, 160, 71)',
                            'rgb(255, 152, 0)',
                            'rgb(156, 39, 176)',
                            'rgb(229, 57, 53)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                font: { size: 12 }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: { size: 14 },
                            bodyFont: { size: 13 }
                        }
                    }
                }
            });
            
            // Gráfico de Dispersión - Consumo vs Tiempo Reposición
            const scatterCtx = document.getElementById('scatterChart').getContext('2d');
            const scatterChart = new Chart(scatterCtx, {
                type: 'scatter',
                data: {
                    datasets: [{
                        label: 'Artículos',
                        data: [
                            {x: 10, y: 50},
                            {x: 15, y: 30},
                            {x: 7, y: 80},
                            {x: 20, y: 25},
                            {x: 5, y: 95},
                            {x: 25, y: 15},
                            {x: 12, y: 60},
                            {x: 18, y: 35},
                            {x: 8, y: 75},
                            {x: 22, y: 20}
                        ],
                        backgroundColor: 'rgba(30, 136, 229, 0.8)',
                        borderColor: 'rgb(30, 136, 229)',
                        borderWidth: 1,
                        pointRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `Artículo ${topItems[context.dataIndex]}: ${context.parsed.y} unidades`;
                                }
                            },
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: { size: 14 },
                            bodyFont: { size: 13 }
                        }
                    },
                    scales: {
                        y: {
                            title: {
                                display: true,
                                text: 'Consumo Mensual (unidades)',
                                font: { weight: 'bold' }
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Tiempo de Reposición (días)',
                                font: { weight: 'bold' }
                            }
                        }
                    }
                }
            });
            
            // Gráfico de Líneas - Tendencias Anuales
            const lineCtx = document.getElementById('lineChart').getContext('2d');
            const lineChart = new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'HOLDERS',
                            data: [85, 78, 92, 105, 120, 130, 140, 135, 125, 110, 95, 88],
                            borderColor: 'rgba(30, 136, 229, 1)',
                            backgroundColor: 'rgba(30, 136, 229, 0.1)',
                            borderWidth: 3,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'HERRAMIENTAS',
                            data: [65, 70, 75, 80, 95, 110, 125, 115, 105, 90, 75, 68],
                            borderColor: 'rgba(67, 160, 71, 1)',
                            backgroundColor: 'rgba(67, 160, 71, 0.1)',
                            borderWidth: 3,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'REFACCIONES',
                            data: [45, 50, 60, 70, 85, 95, 110, 100, 90, 75, 60, 50],
                            borderColor: 'rgba(255, 152, 0, 1)',
                            backgroundColor: 'rgba(255, 152, 0, 0.1)',
                            borderWidth: 3,
                            tension: 0.3,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: { size: 14 },
                            bodyFont: { size: 13 }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Consumo (unidades)',
                                font: { weight: 'bold' }
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Meses',
                                font: { weight: 'bold' }
                            }
                        }
                    }
                }
            });
}