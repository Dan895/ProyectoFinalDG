
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/OperacionesPadre.js"></script>
    <script src="assets/js/operacionesCurso.js"></script>
    <script src="assets/js/OperacionesMaestro.js"></script>

        <script>
            $(document).ready(function(){
                $("#EstudianteLink").click(function(){
                    $("#contenido").load("pages/Estudiante/createEstudiante.php")
                });
                $("#PadreLink").click(function (){
                    $("#contenido").load("pages/Padre/createPadre.php")
                });
                $("#CursoLink").click(function (){
                    $("#contenido").load("pages/Curso/createCurso.php")
                });
                $("#MaestroLink").click(function (){
                    $("#contenido").load("pages/Maestro/createMaestro.php")
                });
            });
        </script>



    </body>
</html>

