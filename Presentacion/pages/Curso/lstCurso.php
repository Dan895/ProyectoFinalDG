<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn, "SELECT * FROM curso");
?>

<div class="container jumbotron">
    <h2 class="text-center">Listado de Cursos</h2>
    <?php
    if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-bordered table-dark text-center">

            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td scope="row"><?php echo $row["codigo_Curso"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["descripcion"]; ?></td>
                    <td>
                        <!--<a class="btn btn-success" name="btnActualizar" data-taget="#updCurso" href="pages/Curso/updateCurso.php?ID= php echo $row["codigo_Curso"]?>">Actuliazar</a>-->
                        <button type="button" class="btn btn-success edit" data-toggle="modal" data-target="editar" value="<?php echo $ID = row["codigo_Curso"]?>">
                            Actualizar
                        </button>
                        <a class="btn btn-danger" href="deleteCurso.php?ID=<?php echo $row["codigo_Curso"]; ?>">Eliminar</a>
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



    <!-- Modal Editar -->
    <div class="modal fade" id="editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="container jumbotron">
                                    <h2>Registro de nuevo Curso</h2>

                                    <form>
                                        <div class="form-group">
                                            <p class="lead">Codigo: </p>
                                            <input type="text" class="lead form-control" name="id" id="id" disabled>
                                            <span class="lead" id="idMessage"></span>
                                        </div>
                                        <div class="form-group">
                                            <p class="lead">Curso: </p>
                                            <input type="text" class="lead form-control" name="nameCurso" id="nameCurso">
                                            <span class="lead" id="idMessage"></span>
                                        </div>
                                        <div class="form-group">
                                            <p class="lead">Descripción:</p>
                                            <input type="text" class="lead form-control" name="descripcion" id="descripcion">
                                        </div>
                                        <div class="lead w-100">
                                            <input type="hidden" value="2" name="type" id="type">
                                            <input type="button" class="btn btn-primary w-100" id="sendStudentData"  data-toggle="modal" data-target="#messageModal" onclick="sendData()" value="Actualizar">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


</div><!--cierre del container-->


?>

