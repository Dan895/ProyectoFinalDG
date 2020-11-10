<?php?>

<div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
        <div class="logo">
            <h4 class="text-light font-weight-bold p-3">Administración
                Educativa
            </h4>
        </div>
        <div class="menu">
            <a href="#" id="EstudianteLink" class="d-block p-3 text-light"><i class="icon ion-md-school mr-2 lead"></i>Estudiante</a>

            <a href="#" id="MaestroLink" class="d-block p-3 text-light"><i class="icon ion-md-contact mr-2 lead"></i>Maestro</a>

            <a href="#" id="CursoLink" class="d-block p-3 text-light"><i class="icon ion-md-book mr-2 lead"></i>Curso</a>
            <a href="#" class="d-block p-3 text-light"><i class="icon ion-md-stats mr-2 lead"></i>Notas</a>
            <a href="#" id="PadreLink" class="d-block p-3 text-light"><i class="icon ion-md-people mr-2 lead"></i>Padres</a>
        </div>
    </div>

    <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
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
        </nav>

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

            <section>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h4>Contenido</h4>
                                    <button class="btn btn-info w-100"> Hola </button>
                                </div>
                                <div class="col-lg-3">

                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <div id="contenido">

            </div>
