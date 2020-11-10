<?php?>
            </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/OperacionesPadre.js"></script>
    <script src="assets/js/operacionesCurso.js"></script>
    <script src="assets/js/OperacionesMaestro.js"></script>
    <script src="assets/js/OperacionesEstudiante.js"></script>
    <script src="assets/js/OperacionesAsignacion.js"></script>
    <script>
        $(document).ready(function (){
            $(document).on('click', '.edit', function (){
                var id = $(this).text();
                var name = $('#nameCurso'+id).text();
                var descripcion = $('descripcion'+id).text();

                $('#edit').modal('show');
                $('#nameCurso').val(name);
                $('#descripcion').val(descripcion);

            });
        });
    </script>
        <!--Codigo para recargar paginas-->
        <script>
            $(document).ready(function(){
                $("#EstudianteLink").click(function(){
                    $("#contenido").load("pages/Estudiante/createEstudiante.php")
                });
                $("#lstEstudiante").click(function (){
                    $("#contenido").load("pages/Estudiante/lstEstudiante.php")
                });
                $("#PadreLink").click(function (){
                    $("#contenido").load("pages/Padre/createPadre.php")
                });
                $("#lstPadres").click(function (){
                    $("#contenido").load("pages/Padre/lstPadre.php")
                });
                $("#CursoLink").click(function (){
                    $("#contenido").load("pages/Curso/createCurso.php")
                });
                $("#lstCurso").click(function (){
                    $("#contenido").load("pages/Curso/lstCurso.php")
                });
                $("#MaestroLink").click(function (){
                    $("#contenido").load("pages/Maestro/createMaestro.php")
                });
                $("#lstMaestro").click(function (){
                    $("#contenido").load("pages/Maestro/lstMaestro.php")
                });
                $("#Asignacion").click(function () {
                    $("#contenido").load("pages/Asignacion/Asignacion.php")
                });
            });
        </script>
        <!--parte del nuevo menu-->
        <script>
            $('.est-btn').click(function(){
                $('nav ul .est-show').toggleClass("show");
                $('nav ul .first').toggleClass("rotate");
            });
            $('.serv-btn').click(function(){
                $('nav ul .serv-show').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate");
            });
            $('.not-btn').click(function(){
                $('nav ul .not-show').toggleClass("show2");
                $('nav ul .third').toggleClass("rotate");
            });
            $('.cur-btn').click(function(){
                $('nav ul .cur-show').toggleClass("show3");
                $('nav ul .fourth').toggleClass("rotate");
            });
            $('.pad-btn').click(function(){
                $('nav ul .pad-show').toggleClass("show4");
                $('nav ul .five').toggleClass("rotate");
            });
            //Script que produce que el menu quede seleccionado
            $('nav ul li').click(function(){
                $(this).addClass("active").siblings().removeClass("active");
            });
        </script>
    </body>
</html>

