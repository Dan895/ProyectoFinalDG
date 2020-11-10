<?php
include_once '../Datos/Database.php';

// Read POST data
$data = json_decode(file_get_contents("php://input"));

if (isset($data)) {

    $completeName = $data->completeName;
    $phone = $data->telefono;
    $email = $data->email;
    $type = $data->type;

    if ($type == 1) {
        $sql = "INSERT INTO padre (nombre, telefono, email)
	 VALUES ('$completeName', '$phone', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Padre creado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 2) {

        $sql = "UPDATE padre SET 
                nombre = '$completeName', telefono = '$phone', email = '$email'
                WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante actualizado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } /*else if ($type == 3) {

        $sql = "DELETE FROM student 
                WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante borrado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    }*/
}
?>
