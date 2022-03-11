<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>INSERTAR PRODUCTO</h1>
    <h2>Introduce los datos del nuevo producto</h2>
    <form action="./controladorInsertar.php" method="post">
          C&oacute;digo: <input type="text" name="codigo"><br>
          Descripci&oacute;n: <input type="text" name="descripcion"><br>
          Porcentaje de rebaja: <input type="number" name="rebaja"><br>
          Rebajado: <input type="checkbox" name="rebajado" value="true"><br>
          Precio: <input type="number" step="0.01" name="precio"><br>
          <input type="submit">
    </form>

</body>
</html>
