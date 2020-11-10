<section> <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="container jumbotron">
                    <h2>Registro de nuevo Curso</h2>

                    <form>
                        <div class="form-group">
                            <p class="lead">Estudiante: </p>
                            <?php
                            include_once '../../../Datos/Database.php';
                            $result = mysqli_query($conn,"SELECT carnet_Estudiante, nombre FROM estudiante");
                            ?>
                            <select id="estudiante" name="estudiante" class="form-group">
                                <?php while ($row= mysqli_fetch_array($result)){ ?>
                                    <option class="lead" value="<?php echo $row["carnet_Estudiante"]?>"><?php echo $row["nombre"]?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <p class="lead">Curso: </p>
                            <?php
                            include_once '../../../Datos/Database.php';
                            $result = mysqli_query($conn,"SELECT codigo_Curso, nombre FROM curso");
                            ?>
                            <select id="curso" name="curso" class="form-group">
                                <?php while ($row= mysqli_fetch_array($result)){ ?>
                                    <option class="lead" value="<?php echo $row["codigo_Curso"]?>"><?php echo $row["nombre"]?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <p class="lead">Maestro: </p>
                            <?php
                            include_once '../../../Datos/Database.php';
                            $result = mysqli_query($conn,"SELECT carnet_Maestro, nombre FROM maestro");
                            ?>
                            <select id="maestro" name="maestro" class="form-group">
                                <?php while ($row= mysqli_fetch_array($result)){ ?>
                                    <option class="lead form-control" value="<?php echo $row["carnet_Maestro"]?>"><?php echo $row["nombre"]?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <p class="lead">Zona:</p>
                            <input type="text" class="lead form-control" name="zona" id="zona" maxlength="2" max="60">
                        </div>
                        <div class="form-group">
                            <p class="lead">Examen Final:</p>
                            <input type="text" class="lead form-control" name="examen" id="examen" maxlength="2" max="40">
                        </div>
                        <div class="lead w-100">
                            <input type="hidden" value="1" name="type" id="type">
                            <input type="button" class="btn btn-primary" id="sendStudentData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataAsignacion()" value="Guardar">
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
                    <h5 class="modal-title" id="exampleModalLabel">Asignación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="lead" id="mdlMessage"></span>
                    <input type="hidden" name="mdlSuccess" id="mdlSuccess">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleanDataAsignacion()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</section>