<section> <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-9 col-lg-6">
                <div class="container jumbotron">
                    <h2>Registro de nuevo Maestro</h2>

                    <form name="form">
                        <div class="form-group">
                            <p class="lead">Carnet:</p>
                            <input type="text" class="lead form-control" name="id" id="id" onkeyup="searchId(this.value)"
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
                            <input type="hidden" value="1" name="type" id="type">
                            <input type="button" class="btn btn-primary" id="sendMasterData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataMaster()" value="Guardar">
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
</section>
