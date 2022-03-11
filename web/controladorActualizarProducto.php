<html>
  <head>
    <title>Proceso de actualizaci&oacute;n de un producto existente</title>
  </head>
  <body>
    <h1>Guardando el nuevo producto...</h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./producto.php");


//recoger valores del form
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$rebaja = $_POST["rebaja"];
$estarebajadoText = $_POST["rebajado"];
$precio = $_POST["precio"];

//echo "<br>PRUEBAS. Está rebajado nos da: $estarebajado<br>";
if ($estarebajadoText == "true") {
  $estarebajado = 1;
} else {
  $estarebajado = 0;
}

echo "El codigo del formulario es: $codigo<br>";
//hemos recogido datos del formulario... creamos objeto
$productoNuevo = new Producto($codigo,$descripcion,$rebaja,$estarebajado,$precio);
echo $productoNuevo->getCodigo()."<br>";


//Vamos a por la
$SQLUpdate = $productoNuevo->getUpdateSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLUpdate."<br>";

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
   $conn->exec($SQLUpdate);
   echo "Actualizaci&oacute;n correcta";
} catch (PDOException $e) {
    echo "Update failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>