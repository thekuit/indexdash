<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Laboratorio de Automatización</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-dark navbar-expand bg-dark sb-topnav">
            <div class="container-fluid"><button class="btn btn-link btn-sm text-light order-md-1" id="sidebarToggle" type="button"><i class="fa fa-bars" style="font-size: 20px;"></i></button><a class="navbar-brand bounce animated" href="#" style="font-family: Dosis, sans-serif;color: var(--light);text-align: center;font-weight: bold;font-style: normal;font-size: 20px;line-height: 24px;letter-spacing: 5px;"><img src="assets/img/logosn.png" style="width: 28px;margin-right: 10px;border-width: 0px;border-style: solid;border-radius: 8px;">LABREMAUT</a>
                <form class="form-inline d-none d-md-inline-block order-2 ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <div class="input-group-append"></div>
                    </div>
                </form>
                <ul class="navbar-nav d-flex order-3 ml-auto ml-md-0">
                    <!--<li class="nav-item d-flex d-sm-flex d-md-none justify-content-center align-items-center justify-content-sm-center" style="margin-right: 7px;">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle text-white" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fa fa-search" style="font-size: 25px;margin-right: 0px;"></i> </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </li>-->
                    <li class="nav-item d-flex justify-content-center align-items-center">
                        <div class="nav-item dropdown yes-arrow"><a class="dropdown-toggle active text-white" aria-expanded="false" data-toggle="dropdown" href="#">&nbsp;<img class="rounded-circle" src="assets/img/adm.png" style="width: 40px;border-width: 2px;border-style: solid;"></a>
                            <div class="dropdown-menu dropdown-menu-right text-left shadow" style="margin-top: 16px;"><a class="dropdown-item" href="#">Mi perfil</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Salir</a>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <div id="sidenavAccordion" class="sb-sidenav accordion sb-sidenav-dark">
                            <div class="sb-sidenav-menu">
                                <div class="nav">
                                    <div>
                                        <div class="sb-sidenav-menu-heading"><span>DASHBOARD</span></div><a class="nav-link active" href="#">
                                            <div class="sb-nav-link-icon"><i class="fas fa-align-justify"></i></div><span>Página principal</span>
                                        </a>
                                    </div>
                                    <div><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                            <div class="sb-nav-link-icon"><i class="fa fa-desktop"></i></div><span>Laboratorios</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="collapseLayouts" class="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                            <div class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="#">Añadir Laboratorio</a>
                                                <a class="nav-link" href="#">Editar Laboratorio</a>
                                                <a class="nav-link" href="#">Información</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                            <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div><span>Docentes</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="collapseLayouts2" class="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                            <div class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="#">Registrar Docente</a>
                                                <a class="nav-link" href="#">Editar Docente</a>
                                                <a class="nav-link" href="#">Listado de Docentes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                            <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div><span>Estudiantes</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="collapseLayouts3" class="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                            <div class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="#">Registrar Estudiante</a>
                                                <a class="nav-link" href="#">Editar Estudiante</a>
                                                <a class="nav-link" href="#">Listado de Estudiantes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="sb-sidenav-menu-heading"><span>CALENDARIO</span></div><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Accordion 2 Layer</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#sidenavAccordion">
                                            <div id="sidenavAccordionPages" class="sb-sidenav-menu-nested nav accordion"><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"><span>Menu Item</span>
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                                </a>
                                                <div id="pagesCollapseAuth" class="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                    <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sb-sidenav-footer">
                                <div class="small"><span>Sesion iniciada : Jhon Doe</span></div>
                            </div>
                        </div>
                    </div>
                    <div id="layoutSidenav_content">
                        <main></main>
                    </div>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main></main>
            </div>
        </div>
    </div>

<?php
echo 'Hola mundo';
?>





    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>


<body></body>
</html>