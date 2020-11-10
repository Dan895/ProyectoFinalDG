<section> <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-9 col-lg-6">
                <div class="container jumbotron">
                    <h2>Registro de nuevo Estudiante</h2>

                    <form>
                        <div class="form-group">
                            <p class="lead">Carnet:</p>
                            <input type="text" class="lead form-control" name="id" id="id" onkeyup="searchIdStudent(this.value)">
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
                            <input type="hidden" value="1" name="type" id="type">
                            <input type="button" class="btn btn-primary" id="sendStudentData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataEstudiante()" value="Guardar">
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
                    <h5 class="modal-title" id="exampleModalLabel">Gestión de Estudiantes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="lead" id="mdlMessage"></span>
                    <input type="hidden" name="mdlSuccess" id="mdlSuccess">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleanData()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>