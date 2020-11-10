<?php
include_once '../Datos/Database.php';

// Read POST data
$data = json_decode(file_get_contents("php://input"));

if (isset($data)) {

    $newId = $data->newId;
    $name = $data->name;
    $fechaNac = $data->fechaNac;
    $type = $data->type;

    if ($type == 1) {

        $sql = "INSERT INTO maestro (carnet_Maestro, nombre, fechaNac)
	 VALUES ('$newId', '$name', '$fechaNac')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success" => true, "message" => "Maestro creado con éxito."));
        } else {
            echo json_encode(array("success" => false, "message" => "Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    }
}
?>