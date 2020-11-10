<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn,"SELECT * FROM curso WHERE codigo_Curso='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>

<div class="container jumbotron">
    <h2>Eliminación de Curso</h2>
    <form method="post" action="../../../Negocio/cursoBussiness.php">
        <div>
            <p class="lead">Codigo:</p>
            <input readonly type="text" class="lead" name="id" id="id" value="<?php echo $row['codigo_Curso']; ?>">
            <span class="lead" id="idMessage"></span>
        </div>
        <div>
            <p class="lead">Nombre: </p>
            <input readonly type="text" class="lead" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div>
            <p class="lead">Descripcion:</p>
            <input readonly type="text" class="lead" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']; ?>">
        </div>
        <div class="lead">
            <input type="hidden" value="3" name="type" id="type">
            <input type="button" class="btn btn-danger" name="submit" id="sendStudentData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataCurso()" value="Borrar">
        </div>
    </form>
</div>
