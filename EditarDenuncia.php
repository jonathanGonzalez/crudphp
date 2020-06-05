<?php
include_once('conexionbd.php');

$id= $_POST['input_id'];
$lugar = $_POST['input_lugar'];
$fecha = $_POST['input_fecha'];
$hora = $_POST['input_hora'];
$tipoVehiculo = $_POST['input_tipo'];
$placa = $_POST['input_placa'];
$denuncia = $_POST['input_denuncia'];

echo $id;
echo "</br>";
echo $lugar;
echo "</br>";
echo $fecha;
echo "</br>";
echo $hora;
echo "</br>";
echo $tipoVehiculo;
echo "</br>";
echo $placa;
echo "</br>";
echo $denuncia;
echo "</br>";


//2. sentencia sql (CRUD: Create, Read, Update, Delete)
//$sql = "INSERT INTO denuncias (lugar, fecha, hora, tipo, placa, denuncia) VALUES ('".$lugar."', '".$fecha."', '".$hora."', '".$tipoVehiculo."', '".$placa."','".$denuncia."')";
$sql = "UPDATE denuncias SET lugar='{$lugar}', fecha='{$fecha}', hora='{$hora}', tipo='{$tipoVehiculo}', placa='{$placa}', denuncia = '{$denuncia}' WHERE id_pk='{$id}'";

 //se lanza la consulta en la base de datos
$respuesta = $conn->query($sql);

//3. procesa la respuesta
if($respuesta === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "el error al actualizar es: " . $conn->error;
}

//4. cierra la conexión
$conn->close();
header("Location: index.php");


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "denuncias_bd";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else
// {
//     echo "Conección establecida con la base de datos...";
// }

// $sql = "INSERT INTO denuncias (lugar, fecha, hora, tipo, placa, denuncia)
// VALUES ('".$lugar."', '".$fecha."', '".$hora."', '".$tipoVehiculo."', '".$placa."','".$denuncia."')";

// if ($conn->query($sql) === TRUE) {
//     echo "Registro creado correctamente";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $conn->close();
// header("Location: index.php");

?>