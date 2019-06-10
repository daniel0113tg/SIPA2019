<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>

        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../estilos/style.css"></link>

        <!-- intro.js -->
        <link href="../../intro.js/introjs.css" rel="stylesheet">

        <title>PROYECTO SIPA</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index.php">SIPA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="tour-step tour-step-two collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Register.php">REGISTRO</a></li>
                        <!--<li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <div class="intro-header">
                <form method="post">
            <h2 style="color: #004e91; font-size: 300%;">Regístrate</h2>
            <img src="../../images/register.png" width="200"  height="200">
            <br></br>
            <div data-step="3" data-intro="En esta sección te puedes registrar" class="Registro_usuarios">
                <h2 style="color: #0000; font-size: 120%;"> <a href="../../aplicacion/formularios_registro/RegistrarProfesor.php"> Registro como Profesor</a></h2>
                <h2 style="color: #0000; font-size: 120%;"><a href="../../aplicacion/formularios_registro/RegistrarEstudiante.php"> Registro como Estudiante</a></h2>
            </div>
        </form>
        <script type="text/javascript" src="../../intro.js/intro.js"></script>
        <br/>
        <a class="btn btn-info btn-success" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress', true).start();">Ayuda</a>
    </body>
</html>