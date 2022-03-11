<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>MOSTRAR CLIENTE</h1>
    <h2>Introduce el tipo de ordenaci&oacute;n</h2>
    <form action="./controladorMostrarCliente.php" method="post">
          Ordenado por: 
          <br><input type="radio" name="tipoOrdenacion" value="precioasc">Nombre Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="preciodesc">Nombre Descendente
          <br><input type="radio" name="tipoOrdenacion" value="descripcionasc">Apellidos Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="descripciondesc">Apellidos Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
