<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn, "SELECT * FROM estudiante");
?>

<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <h2 class="text-center">Listado de estudiantes</h2>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table table-bordered table-dark text-center">
                    <tr>
                        <td scope="col">Carnet</td>
                        <td scope="col">Nombre</td>
                        <td scope="col">Fecha Nacimiento</td>
                        <td scope="col">Padre</td>
                        <td scope="col">Opciones</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["carnet_Estudiante"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["fechaNac"]; ?></td>
                            <td><?php echo $row["codigo_Padre"]; ?></td>
                            <td>
                                <a class="btn btn-success updateEst" data-toggle="modal" data-target="#staticBackdrop" onclick="cargarEstudiante()">Actualizar</a>
                                <a class="btn btn-danger" href="delete.php?ID=<?php echo $row["carnet_Estudiante"]; ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "No existen estudiantes";
            }
            ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Actuliazar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Actualización de Alumno</h2>
                <form>
                    <div class="form-group">
                        <p class="lead">Carnet:</p>
                        <input type="text" class="lead form-control" name="id" id="id">
                        <span class="lead" id="idMessage"></span>
                    </div>
                    <div class="form-group">
                        <p class="lead">Nombres: </p>
                        <input type="text" class="lead form-control" name="completeName" id="completeName">
                    </div>
                    <div class="form-group">
                        <p class="lead">Fecha Nacimiento:</p>
                        <input type="date" class="lead form-control" name="fechaNac" id="fechaNac">
                    </div>
                    <div class="form-group">
                        <p class="lead">Padre/Madre: </p>
                        <?php
                        include_once '../../../Datos/Database.php';
                        $result = mysqli_query($conn,"SELECT codigo_Padre, nombre FROM padre");
                        ?>
                        <select id="padre" name="padre" class="form-group">
                            <?php while ($row= mysqli_fetch_array($result)){ ?>
                                <option class="lead" value="<?php echo $row["codigo_Padre"]?>"><?php echo $row["nombre"]?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="lead w-100">
                        <input type="hidden" value="2" name="type" id="type">
                        <input type="button" class="btn btn-primary" id="sendStudentData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataEstudiante()" value="Guardar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gestión de Maestros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="lead" id="mdlMessage"></span>
                <input type="hidden" name="mdlSuccess" id="mdlSuccess">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleanDataMaestro()">Cerrar</button>
            </div>
        </div>
    </div>
</div>
