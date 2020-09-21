<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Eliminar empleado</title>
  </head>

  <script type="text/javascript">
    function ConfirmDelete()
    {
      var respuesta = confirm("¿Está seguro que desea eliminar permanentemente a este empleado?");
      if(respuesta == true)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  </script>

  <body>
    <form action="eliminar.php" method="post">

      Ingrese la clave de empleado que desea eliminar
      <br>
      <input type="text" name="Clave_Emp">
      <br>
      <br>
      <input type="submit" name="name" value="Eliminar" onclick="return ConfirmDelete()">

    </form>
    <br>
    <a href="http://joseavila96.epizy.com/">Regresar a la tabla de empleados</a>
    <br>

  </body>
</html>
