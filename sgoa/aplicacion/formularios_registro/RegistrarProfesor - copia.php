<!DOCTYPE html >
<html  lang="es">
    <head>
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap-responsive.css"></link>
        <link rel="stylesheet" type="text/css" href="../../estilos/estilosProf.css"></link>
        <script type="text/javascript" src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/funciones_validar_formularios.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
        <title>Proyecto SGOA</title>
    </head>
    <body>
        
        <form method="post" action="ejecutar_registrar_profesor.php"  onsubmit=" return validar_formulario_profesor()"  method="post" enctype="multipart/form-data" >
            <legend style="font-size: 18pt;" ><b>Actualizacion de Credenciales</b></legend>
            <input class="form-control" placeholder=" Nombre de Usuario" id="usuario" type="text"required name="usuario"></input>
            <input class="form-control" placeholder=" Contraseña" id="contrasena" type="text" required name="contrasena"></input>
                        <input style="font-size: 14pt;text-align: center;" class="btn btn-info btn-responsive btninter centrado" type="submit" value="Actualizar">
        </form>


    </body>
</html>