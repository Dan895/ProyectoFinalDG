<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn, "SELECT * FROM maestro");
?>

<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <h2 class="text-center">Listado de Maestros</h2>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table table-bordered table-dark text-center">
                    <tr>
                        <td scope="col">Carnet</td>
                        <td scope="col">Nombre</td>
                        <td scope="col">Fecha Nacimiento</td>
                        <td scope="col">Opciones</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["carnet_Maestro"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["fechaNac"]; ?></td>
                            <td>
                                <a class="btn btn-success update" data-toggle="modal" data-target="#staticBackdrop" onclick="cargarMaestro()">Actualizar</a>
                                <a class="btn btn-danger"
                                   href="delete.php?ID=<?php echo $row["carnet_Maestro"]; ?>">Eliminar</a></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "No existen maestros";
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
                <h2>Modificación de Maestro</h2>

                <form>
                    <div class="form-group">
                        <p class="lead">Carnet:</p>
                        <input type="text" class="lead form-control" name="id" id="id"
                               onpaste="return false" required>
                        <span class="lead" id="idMessage"></span>
                    </div>
                    <div class="form-group">
                        <p class="lead">Nombre: </p>
                        <input type="text" class="lead form-control" name="name" id="name">
                        <span class="lead" id="idMessage"></span>
                    </div>
                    <div class="form-group">
                        <p class="lead">Fecha Nacimiento:</p>
                        <input type="date" class="lead form-control" name="fechaNac" id="fechaNac" maxlength="10">
                    </div>
                    <div class="lead w-100">
                        <input type="hidden" value="2" name="type" id="type">
                        <input type="button" class="btn btn-primary" id="sendMasterData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataMaster()" value="Guardar">
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

