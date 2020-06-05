<?

//1. conexión entre nuestra app(php) y el servidor de bases de datos(mysql)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "denuncias_bd";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "mi conexión con la bd falló";
    die("la conexión falló " . $conn->connect_error);
}
else
{
    echo "conexión establecida entre php y mysql</br>";
}


?>