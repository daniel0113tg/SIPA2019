<?php

require '../../aplicacion/clases_negocio/funciones_oa_estudiante.php';
require '../../aplicacion/clases_negocio/funciones_oa_profesor.php';
error_reporting(E_ERROR);
$cedula = filter_input(INPUT_POST, 'cedula');
$nombres = filter_input(INPUT_POST, 'nombres');
$apellidos = filter_input(INPUT_POST, 'apellidos');
$email = filter_input(INPUT_POST, 'email');
$carrera = filter_input(INPUT_POST, 'carrera');
$facultad = filter_input(INPUT_POST, 'facultad');
$usuario = generar_usuario_profesor($nombres, $apellidos);
$contrasenia = generar_cadena_aleatoria();

$carpeta = "../../imagenes/";
opendir($carpeta);
$destino = $carpeta.$_FILES['file']['name'];

copy($_FILES['file']['tmp_name'], $destino);
$path = $_FILES['file']['name'];

$ext = pathinfo($path, PATHINFO_EXTENSION);
$target_file = $carpeta .urlencode($path);

insertar_usuario($usuario, $contrasenia,'EST', 'F');
$id_usuario= recuperar_id_usuario_por_nombre($usuario);
 echo '<script>alert('.$carrera.')</script> ';
if(insertar_estudiante($cedula, $nombres, $apellidos, $carrera, $facultad, $email, $id_usuario,$target_file)){
		envia_mail_credenciales_e($email,$usuario,$contrasenia,$nombres,$apellidos);
     echo '<script>alert("Usuario registrado correctamente! Revise su mail para obtener las credenciales")</script> ';
            echo '<meta http-equiv="Refresh" content="0; ../../aplicacion/formularios_registro/Login.php">';
}else{
    echo '<script>alert("No se ha podido registrar el usuario. Contacte a un administrador")</script> ';
    echo "<script>location.href='Login.php'</script>";
}


 
?>
