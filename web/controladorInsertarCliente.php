<html>
  <head>
    <title>Proceso de inserci&oacute;n de nuevo cliente</title>
  </head>
  <body>
    <h1>Guardando el nuevo cliente...</h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./cliente.php");


//recoger valores del form
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fecha_nac = $_POST["fecha_nac"];
$telefono = $_POST["telefono"];


echo "El nombre del cliente es: $nombre<br>";
//hemos recogido datos del formulario... creamos objeto
$clienteNuevo = new Cliente($dni,$nombre,$apellidos,$fecha_nac,$telefono);
echo $clienteNuevo->getNombre()."<br>";


//Vamos a por la
$SQLInsert = $clienteNuevo->getInsertSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLInsert."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iaw_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLInsert);
   echo "Inserci&oacute;n correcta";
} catch (PDOException $e) {
    echo "Insert failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>