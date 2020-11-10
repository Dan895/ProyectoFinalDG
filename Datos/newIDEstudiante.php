<?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM estudiante WHERE carnet_Estudiante='" .$_GET['newId'] . "'");
$row= mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(array("success"=>true, "message"=>"Id ya existe"));
} else {
    echo json_encode(array("success"=>false, "message"=>"Id válido"));
}


?>
