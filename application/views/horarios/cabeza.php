<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generador de Horarios</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>CSS/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>CSS/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?=base_url()?>CSS/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?=base_url()?>CSS/custom.css" rel="stylesheet" />
    <link href="<?=base_url()?>CSS/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <img src="http://bae2008.files.wordpress.com/2012/08/horarios1.gif" class="img">
            <div class="right-div">
                <a href="#" class="btn btn-danger pull-right">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?=base_url()?>/index.php/inicio" class="menu-top-active">Inicio</a></li>
                           
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Carreras <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/carreras/altaCarreras">Registro</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/carreras/bajaCarreras">Bajas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Catedraticos <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/catedratico/registroCatedratico">Registro</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/catedratico/bajaCatedratico">Bajas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Experiencias Educativas <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/experiencias/registroExperiencias">Registro</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/experiencias/bajaExperiencias">Bajas</a></li>
                                </ul>
                            </li>

                            <li><a href="<?=base_url()?>index.php/salon/registrarSalon">Salones</a></li>
                             <li><a href="<?=base_url()?>index.php/horario/crearHorarios">Crear horarios</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>