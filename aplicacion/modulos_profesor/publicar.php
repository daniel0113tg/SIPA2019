<?php
session_start();
require_once '../clases_negocio/clase_conexion.php';
require '../clases_negocio/funciones_oa_profesor.php';

if (isset($_POST['objeto_id'])) 
{ 
   // Instructions if $_POST['value'] exist 
	$id_objeto = $_POST['objeto_id'];
	publicarRA($id_objeto);
}

echo '<script charset="UTF-8">alert("El recurso se ha publicado correctamente")</script> ';
echo "<script>location.href='pro_buscar_privado.php'</script>";
?>