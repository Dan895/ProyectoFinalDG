<?php?>

<div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
        <div class="logo">
            <h4 class="text-light font-weight-bold p-3">Administración
                Educativa
            </h4>
        </div>

        <div id="menu">
            <nav class="sidebar">
                <ul>
                    <li>
                        <a href="#" class="est-btn"><i class="fas fa-user-graduate"></i> Estudiante
                            <span class="fas fa-caret-down first"></span>
                        </a>
                        <ul class="est-show">
                            <li><a id="EstudianteLink" href="#"><i class="fas fa-plus mr-2"></i>Crear</a></li>
                            <li><a id="lstEstudiante" href="#"><i class="fas fa-eye mr-2"></i>Mostrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="serv-btn"><i class="fas fa-chalkboard-teacher"></i> Maestro
                            <span class="fas fa-caret-down second"></span>
                        </a>
                        <ul class="serv-show">
                            <li><a id="MaestroLink" href="#"><i class="fas fa-plus mr-2"></i>Crear</a></li>
                            <li><a id="lstMaestro" href="#"><i class="fas fa-eye mr-2"></i>Mostrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="not-btn"><i class="fas fa-chart-bar"></i> Notas
                            <span class="fas fa-caret-down third"></span>
                        </a>
                        <ul class="not-show">
                            <li><a id="lstNotas" href="#"><i class="fas fa-eye mr-2"></i>Mostrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="cur-btn"><i class="fas fa-book-open"></i> Curso
                            <span class="fas fa-caret-down fourth"></span>
                        </a>
                        <ul class="cur-show">
                            <li><a id="CursoLink" href="#"><i class="fas fa-plus mr-2"></i>Crear</a></li>
                            <li><a id="lstCurso" href="#"><i class="fas fa-eye mr-2"></i>Mostrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="pad-btn"><i class="fas fa-user"></i> Padres
                            <span class="fas fa-caret-down five"></span>
                        </a>
                        <ul class="pad-show">
                            <li><a id="PadreLink" href="#"><i class="fas fa-plus mr-2"></i>Crear</a></li>
                            <li><a id="lstPadres" href="#"><i class="fas fa-eye mr-2"></i>Mostrar</a></li>
                        </ul>
                    </li>
                    <li><a id="Asignacion" href="#" class="fas fa-pencil-alt mr-2"></i> Asignación</a></li>
                </ul>
            </nav>
        </div>
    </div><!--div sidebar-menu-->

    <!--menu de contenido-->
    <div class="w-100">

        <div class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline position-relative my-2 d-inline-block">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon ion-md-contact mr-2 lead"></i>Nombre Usuario
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Mensajes</a>
                                <a class="dropdown-item" href="#">Contactos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="content">
            <section class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h1>Bienvenido</h1>
                            <p>Revisa la última información</p>
                        </div>
                        <div class="col-lg-3 d-flex">
                            <button class="btn btn-primary w-100 align-self-center">Descargar Reporte</button>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <div id="contenido">

            </div>