<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Generador de horarios</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?=base_url()?>CSS/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?=base_url()?>CSS/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?=base_url()?>CSS/style.css" rel="stylesheet" />
    <link href="<?=base_url()?>CSS/bootstrap-modal.css" rel="stylesheet" />
    <link href="<?=base_url()?>CSS/bootstrap-modal-bs3patch.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
        
        
        
            <div class="navbar-header">
            
             <div >
    			<a href="<?php echo base_url();?>index.php" >
    				<img src="<?=base_url()?>img/uvLogo.png" class="logo">
				</a>
			</div>
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2>Sistema de control de horarios FEI</h2>
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
                            <li><a href="<?=base_url()?>" class="menu-top"><span class="glyphicon glyphicon-home"></span>&nbsp;Inicio</a></li>
                           
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Carreras <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu active" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/carreras/altaCarreras"><span class="glyphicon glyphicon-book">&nbsp;</span>Agregar</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/carreras/mostrarCarrera"><span class="glyphicon glyphicon-folder-open">&nbsp;</span>Mostrar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Catedr&aacute;ticos <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/catedratico/nuevoMaestro"><span class="glyphicon glyphicon-book">&nbsp;</span>Agregar</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/catedratico/"><span class="glyphicon glyphicon-folder-open">&nbsp;</span>Mostrar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Experiencias Educativas <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/experiencias/registroExperiencias"><span class="glyphicon glyphicon-book">&nbsp;</span>Agregar</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/experiencias/bajaExperiencias"><span class="glyphicon glyphicon-folder-open">&nbsp;</span>Mostrar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Salones<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">                                    
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/salon/registrarSalon"><span class="glyphicon glyphicon-book">&nbsp;</span>Agregar</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/salon/"><span class="glyphicon glyphicon-folder-open">&nbsp;</span>Mostrar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
  

