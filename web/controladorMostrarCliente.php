<html>
  <head>
    <title>Lista completa de clientes</title>
  </head>
  <body>
    <h1>Clientes de la tienda:<br></h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./cliente.php");


//recoger valores del form
$tipoOrdenacion = $_POST["tipoOrdenacion"];

//hemos recogido datos del formulario...
$SQLSelect = Cliente::getSelectSQL($tipoOrdenacion);

echo "La sentencia SQL a ejecutar es: ".$SQLSelect."<br>";

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
    //la function query está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
    //devolviendo un objeto lista iterable
    foreach ($conn->query($SQLSelect) as $row) {
      $clienteNuevo = new Cliente($row['dni'],$row['nombre'],$row['apellidos'],$row['fecha_nac'],$row['telefono']);
      echo $clienteNuevo->imprimeCliente();
    }
   
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>