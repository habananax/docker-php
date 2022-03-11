<html>
  <head>
    <title>Proceso de inserci&oacute;n de nuevo producto</title>
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

echo "El precio del formulario es: $precio<br>";
//hemos recogido datos del formulario... creamos objeto
$productoNuevo = new Producto($codigo,$descripcion,$rebaja,$estarebajado,$precio);
echo $productoNuevo->getPrecio()."<br>";


//Vamos a por la
$SQLInsert = $productoNuevo->getInsertSQL();

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