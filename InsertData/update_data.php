<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>modificar empleado</title>
  </head>

  <body>

    <form action="modificar.php" method="post">

      <h3>Es importante llenar todos los campos.
      <br> Los datos que no se deseen modificar, escribirlos igual a como se encuentran actualmente</h3>
      <br>
      <br>
      Ingrese la clave de empleado que desea modificar
      <input type="text" name="Clave_Emp">
      <br>
      <br>
      Ingrese El nombre a modificar (De no ser modificado, escribir el nombre actual)
      <input type="text" name="Nombre">
      <br>
      <br>
      Ingrese El apellido materno a modificar (De no ser modificado, escribir el apellido paterno actual)
      <input type="text" name="ApPaterno">
      <br>
      <br>
      Ingrese El apellido materno a modificar (De no ser modificado, escribir el apellido materno actual)
      <input type="text" name="ApMaterno">
      <br>
      <br>
      Ingrese la fecha de nacimiento a modificar (De no ser modificado, seleccionar la fecha de nacimiento actual)
      <input type="date" name="FecNac">
      <br>
      <br>
      Ingrese El departamento a modificar (De no ser modificado, escribir el departament actual)
      <br>
      seleccionar 1 para sistemas o 2 para comercial
      <input type="number" name="Departamento">
      <br>
      <br>
      Ingrese El sueldo a modificar (De no ser modificado, escribir el sueldo actual)
      <input type="number" name="Sueldo">
      <br>
      <br>

      <br>
      <input type="submit" name="name" value="Guardar cambios">

    </form>
    <br>
    <a href="http://joseavila96.epizy.com/">Regresar a la tabla de empleados</a>
    <br>

  </body>
</html>
