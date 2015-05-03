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
    <title>Modificación de horarios</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?=base_url()?>CSS/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?=base_url()?>CSS/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?=base_url()?>CSS/style1.css" rel="stylesheet" />
    <link href="<?=base_url()?>CSS/bootstrap-modal.css" rel="stylesheet" />
    <link href="<?=base_url()?>CSS/bootstrap-modal-bs3patch.css" rel="stylesheet" />
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2>Modulo de administración</h2>

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
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Salones<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/salon/">Salones registrados</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url()?>index.php/salon/registrarSalon">Registro</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
  


<div class="row">
  <div class="col-xs-6 col-md-4">
  </div>
  <div class="col-xs-6 col-md-4">
    <div class="cajaEdicion">
      <form name="formulario" method="post" action="<?=base_url()?>index.php/salon/guardaActualizacion">
        <a id="xcerrar" href="<?=base_url()?>index.php/salon/">x</a>
         <div class="modal-header">

            <h3 class="modal-title">Edita el Salon</h3>
          </div>
        <div class="modal-body">
          <h4>Numero de Salon</h4>
          <input type="text" name="numero_salon" value="<?=$consulta['num_salon']?>" id="numero_salon" maxlength="30" size="40" class="form-control" required />
          <h4>Capacidad</h4>
          <input type="number" name="capacidad_salon" value="<?=$consulta['capacidad']?>" id="capacidad_salon" maxlength="30" size="40" class="form-control" required />
          <input name='id' value='<?=$consulta['id']?>' hidden>
          <p></p>
        </div>
          <a class="btn btn-default" href="<?=base_url()?>index.php/salon/" role="button">Cancelar</a>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          <p></p>
          <p></p>
      </form>
    </div>
  </div>
  <div class="col-xs-6 col-md-4">
  </div>
</div>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="<?=base_url()?>js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?=base_url()?>js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="<?=base_url()?>js/custom.js"></script>
  
</body>
</html>