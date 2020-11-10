<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn, "SELECT * FROM padre");
?>

<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <h2 class="text-center">Listado de Padres</h2>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <table id="tablaRegistro" class="table table-bordered table-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Opciones</th>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["codigo_Padre"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["telefono"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><!--Funcionó pero no aseguro nada porque tiene maña XD-->
                                <a class="btn btn-success update" data-toggle="modal" data-target="#staticBackdrop" onclick="cargar()">ver data</a>
                                <a class="btn btn-danger" href="delete.php?ID=<?php echo $row["codigo_Padre"]; ?>">Eliminar</a></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "No existen padres";
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
                <h2>Modificación de Padre</h2>

                <form>
                    <div class="form-group" hidden>
                        <p class="lead">Carnet:</p>
                        <input type="text" class="lead form-control" name="id" id="id" onkeyup="searchId(this.value)">
                        <span class="lead" id="idMessage"></span>
                    </div>
                    <div class="form-group">
                        <p class="lead">Nombres: </p>
                        <input type="text" class="lead form-control" name="completeName" id="completeName">
                        <span class="lead" id="idMessage"></span>
                    </div>
                    <div class="form-group">
                        <p class="lead">Teléfono:</p>
                        <input type="text" class="lead form-control" name="telefono" id="telefono" maxlength="8">
                    </div>
                    <div class="form-group">
                        <p class="lead">Email:</p>
                        <input type="email" class="lead form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="lead w-100">
                        <input type="hidden" value="2" name="type" id="type">
                        <input type="button" class="btn btn-primary" id="sendPadreData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataPadre()" value="Guardar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
