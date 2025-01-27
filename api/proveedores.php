<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-Type: application/json');


include('./conexion.php');

$opcion= $_POST['opcion'];

if ($opcion=='1'){
    $sql="SELECT * FROM SCI_proveedores";
    $consulta = $conn->prepare($sql);
    $consulta->execute();
    $proveedores = array();

        while ($proveedor = $consulta->fetch(PDO::FETCH_ASSOC)) 
                $proveedores[]= $proveedor;
            
    echo json_encode($proveedores);
}

else 
if($opcion=='2'){
    $nombreProveedor =  isset($_POST['nombreProveedor']) ? $_POST['nombreProveedor'] : '';
    $clasificacion = isset($_POST['clasificacion']) ? $_POST['clasificacion'] : '';
    $tipoTrabajo =  isset($_POST['tipoTrabajo']) ? $_POST['tipoTrabajo'] : '';
    $descripcionTrabajo = isset($_POST['descripcionTrabajo']) ? $_POST['descripcionTrabajo'] : NULL; 
    $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : NULL;

    $sql = "INSERT INTO SCI_proveedores(nombreProveedor, clasificacion, tipoTrabajo, descripcionTrabajo, observaciones) 
            VALUES (:nombreProveedor, :clasificacion, :tipoTrabajo, :descripcionTrabajo, :observaciones)";

   $stmt = $conn->prepare($sql);

   $stmt->bindParam(':nombreProveedor',$nombreProveedor);
   $stmt->bindParam(':clasificacion',$clasificacion);
   $stmt->bindParam(':tipoTrabajo',$tipoTrabajo);
   $stmt->bindParam(':descripcionTrabajo',$descripcionTrabajo);
   $stmt->bindParam(':observaciones',$observaciones);

     // Ejecuta la consulta
     if ($stmt->execute()) {
        $respuesta = array('OK' => "Se han capturado los datos");
    } else {
        $respuesta = array('error' => $stmt->errorInfo()[2]);
    }           


    echo json_encode($respuesta);
}
?>