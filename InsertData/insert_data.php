<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrar empleado</title>
  <head>

  <body>

    <h2>Registro de empleado nuevo</h2>

    <form action="insertar.php" method="post">

      Nombre <input type="text" name="Nombre" required><br><br>
      Apellido Paterno <input type="text" name="ApPaterno" required><br><br>
      Apellido Materno <input type="text" name="ApMaterno" required><br><br>
      Fecha de nacimiento <input type="date" name="FecNac" required><br><br>
      Seleccionar 1 para sistemas y 2 para comercial<br>
      <!--Departamento <input type="number" name="Departamento" required><br><br> -->
      <label for "Departamento">Departamento</label>
      <select name="Departamento" name="Departamento">
        <option>1</option>
        <option>2</option>
      </select>
      <br>
      <br>
      Sueldo <input type="number" name="Sueldo" required><br><br>

      <input type="submit" value="Enviar datos">
    </form>

    <br>
    <br>

    <a href="http://joseavila96.epizy.com/">Regresar a la tabla de empleados</a>
    <br>

  </body>
</html>
