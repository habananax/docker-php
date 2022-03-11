<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>MOSTRAR PRODUCTOS</h1>
    <h2>Introduce el tipo de ordenaci&oacute;n</h2>
    <form action="./controladorMostrar.php" method="post">
          Ordenado por: 
          <br><input type="radio" name="tipoOrdenacion" value="precioasc">Precio Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="preciodesc">Precio Descendente
          <br><input type="radio" name="tipoOrdenacion" value="descripcionasc">Descripci&oacute;n Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="descripciondesc">Descripci&oacute;n Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
