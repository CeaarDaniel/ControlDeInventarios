<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-Type: application/json');
include('./conexion.php');

$opcion= $_POST['opcion'];


//LEER REGISTROS DE INVENTARIO

    if ($opcion=='1'){}

 else 
    if($opcion=='2'){
        $idItem_fk = isset($_POST['idItem']) ? $_POST['idItem'] : '';
        $idLinea_fk = isset($_POST['idLinea']) ? $_POST['idLinea'] : NULL;
        $idCategoria_fk = isset($_POST['idCategoria_fk']) ? $_POST['idCategoria_fk'] : '';
        $rackGabeta = isset($_POST['rackGabeta']) ? $_POST['rackGabeta'] : NULL;
        $espacio = isset($_POST['espacio']) ? $_POST['espacio'] : NULL;
        $proceso = isset($_POST['proceso']) ? $_POST['proceso'] : NULL;
        $tiempoVida = isset($_POST['tiempoVida']) ? $_POST['tiempoVida'] : NULL;
        $costoPesos = isset($_POST['costoPesos']) ? $_POST['costoPesos'] : NULL; 
        $costoDolar = isset($_POST['costoDolar']) ? $_POST['costoDolar'] : NULL; 
        $costoTotal = 0;
        $minimo = isset($_POST['minimo']) ? $_POST['minimo'] : NULL;
        $maximo = isset($_POST['maximo']) ? $_POST['maximo'] : NULL;
        $existencia = isset($_POST['existencia']) ? $_POST['existencia'] : ''; 
        $puntoReorden = isset($_POST['puntoReorden']) ? $_POST['puntoReorden'] : NULL;

        //BUSCAR QUE NO EXISTA EL REGISTRO EN EL INVENTARIO

            //HOLDER Y HERRAMIENTA SE INCERTA POR LINEA
            if($idCategoria_fk == '1' || $idCategoria_fk == '2')
            {         
                $sqlEval = "SELECT COUNT(*) from SCI_inventario where idCategoria_fk = :idCategoria_fk and idItem_fk = :idItem_fk  and idLinea_fk = :idLinea_fk";
                $count = $conn->prepare($sqlEval);
                $count->bindParam(':idItem_fk', $idItem_fk);
                $count->bindParam(':idCategoria_fk', $idCategoria_fk);
                $count->bindParam(':idLinea_fk', $idLinea_fk);
                $count->execute();
                if ($count->fetchColumn() > 0) {
                    $respuesta = array('OK' => "YA EXISTE ESTE ITEM EN EL INVENTARIO");
                    echo json_encode($respuesta);
                    die();  
                }
            }

            //REFACCIONES SE INCERTA POR UBICACION EN EL ALMACEN 
            else if($idCategoria_fk == '3'){
                $sqlEval = "SELECT COUNT(*)  from SCI_inventario where idCategoria_fk = :idCategoria_fk and idItem_fk = :idItem_fk and rackGabeta = :rackGabeta";
                $count = $conn->prepare($sqlEval);
                $count->bindParam(':idItem_fk', $idItem_fk);
                $count->bindParam(':idCategoria_fk', $idCategoria_fk);
                $count->bindParam(':rackGabeta', $rackGabeta);
                $count->execute();
                if ($count->fetchColumn() > 0) {
                    $respuesta = array('OK' => "YA EXISTE ESTE ITEM EN EL CATALOGO");
                    echo json_encode($respuesta);
                    die();  
                }
            }
        //FIN BUSCAR QUE NO EXISTA EL REGISTRO EN EL INVENTARIO


        $sql = "INSERT INTO SCI_inventario(idItem_fk , idLinea_fk, idCategoria_fk, rackGabeta, espacio,
                                        proceso,tiempoVida, costoPesos, costoDolares, costoTotal, minimo, maximo, 
                                        existencia, puntoReorden) 
                VALUES (:idItem_fk , :idLinea_fk, :idCategoria_fk, :rackGabeta, :espacio,
                        :proceso, :tiempoVida, :costoPesos, :costoDolar, :costoTotal, :minimo, :maximo, 
                        :existencia, :puntoReorden)";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idItem_fk',$idItem_fk);
        $stmt->bindParam(':idLinea_fk',$idLinea_fk);
        $stmt->bindParam(':idCategoria_fk',$idCategoria_fk);
        $stmt->bindParam(':rackGabeta',$rackGabeta);
        $stmt->bindParam(':espacio',$espacio);
        $stmt->bindParam(':proceso',$proceso);
        $stmt->bindParam(':tiempoVida',$tiempoVida);
        $stmt->bindParam(':costoPesos',$costoPesos);
        $stmt->bindParam(':costoDolar',$costoDolar);
        $stmt->bindParam(':costoTotal',$costoTotal);
        $stmt->bindParam(':minimo',$minimo);
        $stmt->bindParam(':maximo',$maximo);
        $stmt->bindParam(':existencia',$existencia);
        $stmt->bindParam(':puntoReorden',$puntoReorden);

        // Ejecuta la consulta
        if ($stmt->execute()) 
        $respuesta = array('OK' => "Se ha registrado en el inventario");
        else 
        $respuesta = array('OK' => $stmt->errorInfo()[2]);

        echo json_encode($respuesta);
    }

?>