<?php
 session_start();
?>
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
        <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method = "post"  >
            <legend style="font-size: 18pt;" ><b>Actualización de Credenciales</b></legend>
            <input class="form-control" placeholder=" Nombre de Usuario" name="usuario" type="text"required name="usuario"></input>
            <input class="form-control" placeholder=" Contraseña" name="contrasena" type="password" required name="contrasena"></input>
            <input name='boton' style="font-size: 14pt;text-align: center;" class="btn btn-info btn-responsive btninter centrado" type="submit" value="Actualizar">
            <section>
<?php
if(isset($_POST['boton']))
{
require_once '../../aplicacion/clases_negocio/clase_conexion.php';
$id = $_SESSION['id'];
$username = $_POST['usuario'];
$password = $_POST['contrasena']; 
$query = 'UPDATE usuario SET usuario =?, contrasenia =?, activo=? WHERE idUsuario = ?';
$conexion = new Conexion();
$consulta = $conexion->prepare($query);
$consulta->setFetchMode(PDO::FETCH_ASSOC);
$consulta->execute(array($username,$password,'V',$id)); 

echo '<meta http-equiv="Refresh" content="0; ../formularios_registro/Login.php">';
}
?>

            </section>
        </form>
    </body>
</html>