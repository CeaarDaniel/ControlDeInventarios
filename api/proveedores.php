<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-Type: application/json');


include('./conexion.php');

$opcion= $_POST['opcion'];

/*Listado de proveedores*/
    if ($opcion=='1'){
        $sql="SELECT * FROM SCI_proveedores";
        $consulta = $conn->prepare($sql);
        $consulta->execute();
        $proveedores = array();

            while ($proveedor = $consulta->fetch(PDO::FETCH_ASSOC))  {
                    $boton = '<div class="d-flex flex-row">
                                <button class="btn btn-danger my-0 mx-1 btn-eliminar" data-idProveedor="'.$proveedor['idProveedor'].'" onclick=eliminarProveedor(event)><i class="fas fa-trash"></i></button> 
                                <button class="btn boton my-0 mx-1 btn-editar"  
                                        onclick=actualizarProveedor(event) 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modaleditarProvedor"
                                        data-idProveedor="'.$proveedor['idProveedor'].'"
                                        data-nombreProveedor="'.$proveedor['nombreProveedor'].'"
                                        data-clasificacion="'.$proveedor['clasificacion'].'"
                                        data-tipoTrabajo="'.$proveedor['tipoTrabajo'].'"
                                        data-descripcionTrabajo="'.$proveedor['descripcionTrabajo'].'" 
                                        data-observaciones="'.$proveedor['observaciones'].'"
                                        >
                                        <i class="fas fa-pen"></i></button>
                        </div>';

                    $proveedores[]= array(  "ID"=>$proveedor['idProveedor'],
                                            "NOMBRE"=>$proveedor['nombreProveedor'],
                                            "CLASIFICACION"=>$proveedor['clasificacion'],
                                            "TRABAJO"=>$proveedor['tipoTrabajo'],
                                            "DESCRIPCION"=>$proveedor['descripcionTrabajo'],
                                            "OBSERVACIONES"=>$proveedor['observaciones'],
                                            "OPERACIONES" => $boton
                                            );
            }
        echo json_encode($proveedores);
    }


/*Registro de un proveedor*/
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
            if ($stmt->execute()) 
                $respuesta = array('OK' => "Se han capturado los datos");
            else 
                $respuesta = array('error' => $stmt->errorInfo()[2]);
                    
            echo json_encode($respuesta);
    }

/*Actualizar proveedor*/
    else 
     if($opcion=='3'){
        $idProveedor = $_POST['idProveedor'];
        $descripcionTrabajo = isset($_POST['descripcionTrabajoU']) ? $_POST['descripcionTrabajoU'] : NULL;
        $observaciones = isset($_POST['observacionesU']) ? $_POST['observacionesU'] : NULL;
        $result="Se ha actualizado la informacion";

        $sql = "UPDATE SCI_proveedores set descripcionTrabajo = :descripcionTrabajo, observaciones = :observaciones  where idProveedor ='".$idProveedor."'";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':descripcionTrabajo', $descripcionTrabajo);
        $stmt->bindParam(':observaciones', $observaciones);

        // Ejecuta la consulta
        if (!$stmt->execute()) 
            $result="Ha ocurrido un error al modificar el registro";


        if(isset($_POST['nombreProveedorU']) && $_POST['nombreProveedorU']!=""){
            $nombreProveedor = $_POST['nombreProveedorU'];
            $sql = "UPDATE SCI_proveedores set nombreProveedor = :nombreProveedor where idProveedor ='".$idProveedor."'";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombreProveedor', $nombreProveedor);

            // Ejecuta la consulta
            if (!$stmt->execute()) 
                    $result="Ha ocurrido un error al modificar el registro";
        }

        if(isset($_POST['clasificacionU']) && $_POST['clasificacionU']!=""){
            $clasificacion = $_POST['clasificacionU'];
            $sql = "UPDATE SCI_proveedores set clasificacion = :clasificacion where idProveedor ='".$idProveedor."'";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':clasificacion', $clasificacion);

            // Ejecuta la consulta
            if (!$stmt->execute()) 
                    $result="Ha ocurrido un error al modificar el registro";
        }

        if(isset($_POST['tipoTrabajoU']) && $_POST['tipoTrabajoU']!=""){
            $tipoTrabajo = $_POST['tipoTrabajoU'];
            $sql = "UPDATE SCI_proveedores set tipoTrabajo = :tipoTrabajo where idProveedor ='".$idProveedor."'";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':tipoTrabajo', $tipoTrabajo);

            // Ejecuta la consulta
            if (!$stmt->execute()) 
                $result=$result."Ha ocurrido un error al modificar el registro\n";
        }

      echo json_encode($result);
    }

    //Borrar provedor
    if($opcion=='4'){
         $idProveedor=$_POST['idProveedor'];

         $sql="DELETE FROM SCI_proveedores where idProveedor = :idProveedor";

         $stmt = $conn->prepare($sql);
         $stmt->bindParam(':idProveedor', $idProveedor);
         
         if ($stmt->execute()) 
             $respuesta = array('OK' => "Se ha eliminado el registro");
     
          else 
             $respuesta = array('error' => $stmt->errorInfo()[2]);
     
        
           
         echo json_encode($respuesta);
    }
?>