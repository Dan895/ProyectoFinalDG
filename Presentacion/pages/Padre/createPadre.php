<section> <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="container jumbotron">
                    <h2>Registro de nuevo Padre</h2>

                    <form>
                        <!--<div class="form-group">
                            <p class="lead">Carnet:</p>
                            <input type="text" class="lead form-control" name="id" id="id" onkeyup="searchId(this.value)">
                            <span class="lead" id="idMessage"></span>
                        </div>-->
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
                            <input type="hidden" value="1" name="type" id="type">
                            <input type="button" class="btn btn-primary" id="sendPadreData"  data-toggle="modal" data-target="#messageModal" onclick="sendDataPadre()" value="Guardar">
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
                    <h5 class="modal-title" id="exampleModalLabel">Gestión de Padres</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="lead" id="mdlMessage"></span>
                    <input type="hidden" name="mdlSuccess" id="mdlSuccess">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cleanDataPadre()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>

