<?php
include_once '../Datos/Database.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data)) {
    //$newId = $data->newId;
    $name = $data->name;
    $descripcion = $data->descripcion;
    $type = $data->type;

    if ($type == 1) {

        $sql = "INSERT INTO curso (nombre, descripcion)
	 VALUES ('$name', '$descripcion')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success" => true, "message" => "Curso creado con éxito."));
        } else {
            echo json_encode(array("success" => false, "message" => "Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 2) {

        $sql = "UPDATE curso SET 
                nombre = '$nameCurso', descripcion = '$descripcion'
                WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success" => true, "message" => "Curso actualizado con éxito."));
        } else {
            echo json_encode(array("success" => false, "message" => "Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 3) {

        $sql = "DELETE FROM curso 
                WHERE codigo_Curso = $id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success" => true, "message" => "Curso borrado con éxito."));
        } else {
            echo json_encode(array("success" => false, "message" => "Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    }
}
?>