<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-Type: application/json');
include('./conexion.php');

$opcion= $_POST['opcion'];

//LEER REGISTRO
if($opcion=='1'){

}

//INCERTAR UN REGISTRO
else
    if($opcion=='2'){
            $idItem = isset($_POST['idItem']) ? $_POST['idItem'] : '';
            $idCategoria_fk = isset($_POST['idCategoria_fk']) ? $_POST['idCategoria_fk'] : ''; 
            $costoPesos = isset($_POST['costoPesos']) ? $_POST['costoPesos'] : ''; 
            $costoDolar = isset($_POST['costoDolar']) ? $_POST['costoDolar'] : NULL; 
            $existencia = isset($_POST['existencia']) ? $_POST['existencia'] : ''; 
            $nombreModeloItem = isset($_POST['nombreModeloItem']) ? $_POST['nombreModeloItem'] : ''; 
            $descripcionItem = isset($_POST['descripcionItem']) ? $_POST['descripcionItem'] : NULL; 
            $imagenItem = isset($_FILES['imagenItem']['name']) ? $_FILES['imagenItem']['name'] : NULL; //CAPTURA DE LA IMAGEN 
            $tiempoEntrega = isset($_POST['tiempoEntrega']) ? $_POST['tiempoEntrega'] : NULL; 
            $paroProceso = isset($_POST['paroProceso']) ? $_POST['paroProceso'] : ''; 
            $formatoImagen = mime_content_type($_FILES['imagenItem']['tmp_name']); //CAPTURA DEL FORMATO DE LA IMAGEN
            $critico='NA';
            //$idUnidad_fk

            //EVALUAR SI YA EXISTE EL REGISTRO EN EL CATALOGO 
                $sqlEval = 'SELECT COUNT(*) from SCI_catalogo where idItem = :idItem';
                $count = $conn->prepare($sqlEval);
                $count->bindParam(':idItem', $idItem);
                $count->execute();
                if ($count->fetchColumn() > 0) {
                    $respuesta = array('OK' => "YA EXISTE ESTE ITEM EN EL CATALOGO");
                    echo json_encode($respuesta);
                    die();
            }
            

            //EVALUAR SI ES UNA REFACCION
                if($idCategoria_fk=='3'){
                    //EVALUAR SI ES UN ITEM CRITICO
                    if($tiempoEntrega != NULL && $tiempoEntrega > 6) $critico='SI';

                    else 
                        if ($paroProceso==='SI') $critico = 'SI';

                    else $critico = 'NO';
                }
            
            //Si la imagen esta vacio, si no existe en el array formato o no se pudo subir a la carpeta
            if (empty($imagenItem) || !in_array($formatoImagen, ['image/jpeg', 'image/png', 'image/gif', 'image/bmp']) || !move_uploaded_file($_FILES['imagenItem']['tmp_name'], '../img/items/'.$imagenItem)) {
                echo json_encode(array("error"=>'ERROR AL CARGAR LA IMAGEN' ));
                die();
            }

            //DE MOENTO EL VALOR DE ID_UNIDAD SE INSERTE DIRECTAMENTE, PERO YA MAS ADELANTE HAY QUE CAMBIARLO PRO EL VALOR SELECCIONADO
            $sql = "INSERT INTO SCI_catalogo(idItem, idCategoria_fk, idUnidad_fk, costoPesos, costoDolares, existencia, nombreModeloItem, 
                                             descripcionItem, imagenItem, tiempoEntrega, paroProceso, critico) 
                    VALUES (:idItem, :idCategoria_fk, 2, :costoPesos, :costoDolar, :existencia, :nombreModeloItem,
                            :descripcionItem, :imagenItem, :tiempoEntrega, :paroProceso, :critico)";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':idItem',$idItem);
            $stmt->bindParam(':idCategoria_fk',$idCategoria_fk);
            $stmt->bindParam(':costoPesos',$costoPesos);
            $stmt->bindParam(':costoDolar',$costoDolar);
            $stmt->bindParam(':existencia',$existencia);
            $stmt->bindParam(':nombreModeloItem',$nombreModeloItem);
            $stmt->bindParam(':descripcionItem',$descripcionItem);
            $stmt->bindParam(':imagenItem',$imagenItem);
            $stmt->bindParam(':tiempoEntrega',$tiempoEntrega);
            $stmt->bindParam(':paroProceso',$paroProceso);
            $stmt->bindParam(':critico',$critico);

                // Ejecuta la consulta
                if ($stmt->execute()) 
                    $respuesta = array('OK' => "Se han capturado los datos");
                else 
                    $respuesta = array('OK' => $stmt->errorInfo()[2]);
                        
                echo json_encode($respuesta);
    }

    //EDITAR UN REGISTRO
    if($opcion=='3 '){

    }
?>