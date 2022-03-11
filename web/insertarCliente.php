<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>INSERTAR CLIENTE</h1>
    <h2>Introduce los datos del nuevo cliente</h2>
    <form action="./controladorInsertarCliente.php" method="post">
          DNI: <input type="text" name="dni"><br>
          Nombre: <input type="text" name="nombre"><br>
          Apellidos: <input type="text" name="apellidos"><br>
          Fecha de Nacimiento: <input type="date" name="fecha_nac"><br>
          Tel&eacute;fono: <input type="number" name="telefono"><br>
          <input type="submit">
    </form>

</body>
</html>
