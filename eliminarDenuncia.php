<?php
include_once('conexionbd.php');


//echo "id de resgitro a eliminar = ".$_GET['id_para_borrar'];
$id_registro_seleccionado = $_GET['id_para_borrar'];


$sql = "DELETE FROM denuncias WHERE id_pk={$id_registro_seleccionado}";
$respuesta = $conn->query($sql);

if($respuesta === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "el error es: " . $conn->error;
}

$conn->close();
header("Location: index.php");





?>