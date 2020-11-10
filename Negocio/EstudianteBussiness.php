<?php
include_once '../Datos/Database.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data)) {

    $newId = $data->newId;
    $name = $data->name;
    $fechaNac = $data->fechaNac;
    $padre = $data->padre;
    $type = $data->type;

    if ($type == 1) {

        $sql = "INSERT INTO estudiante (carnet_Estudiante, nombre, fechaNac, codigo_Padre) 
        VALUES ('$newId', '$name', '$fechaNac', '$padre')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante creado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 2) {

        $sql = "UPDATE estudiante SET 
                nombre = '$name', fechaNac = '$fechaNac'
                WHERE carnet_Estudiante = $newId";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante actualizado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 3) {

        $sql = "DELETE FROM student 
                WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante borrado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    }
}
?>