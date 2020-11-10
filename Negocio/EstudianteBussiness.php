<?php
include_once 'Datos/Database.php';

// Read POST data
$data = json_decode(file_get_contents("php://input"));

if (isset($data)) {

    $completeName = $data->completeName;
    $old = $data->old;
    $type = $data->type;

    if ($type == 1) {

        $sql = "INSERT INTO estudiante (Last_Name, edad)
	 VALUES ('$completeName', '$old')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("success"=>true, "message"=>"Estudiante creado con éxito."));
        } else {
            echo json_encode(array("success"=>false, "message"=>"Error: " . $sql . " " . mysqli_error($conn)));
        }
        mysqli_close($conn);
    } else if ($type == 2) {

        $sql = "UPDATE student SET 
                Last_Name = '$last_name', First_Name = '$first_name'
                WHERE ID = $id";

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