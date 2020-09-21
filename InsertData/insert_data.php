<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrar empleado</title>
  <head>

  <body>

    <h2>Registro de empleado nuevo</h2>

    <form action="insertar.php" method="post">

      Nombre <input type="text" name="Nombre"><br><br>
      Apellido Paterno <input type="text" name="ApPaterno"><br><br>
      Apellido Materno <input type="text" name="ApMaterno"><br><br>
      Fecha de nacimiento <input type="date" name="FecNac"><br><br>
      Seleccionar 1 para sistemas y 2 para comercial<br>
      Departamento <input type="number" name="Departamento"><br><br>
      Sueldo <input type="number" name="Sueldo"><br><br>

      <input type="submit" value="Enviar datos">
    </form>

    <br>
    <br>

    <a href="http://joseavila96.epizy.com/">Regresar a la tabla de empleados</a>
    <br>

  </body>
</html>
