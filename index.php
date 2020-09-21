<?php

  $conexion=mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //include("conexion.php");

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Proyecto Empleados</title>
  </head>

  <body>
  <a href="http://joseavila96.epizy.com/InsertData/insert_data.php"><h4>Registrar nuevo empleado</h4></a>
  <a href="http://joseavila96.epizy.com/InsertData/delete_data.php"><h4>Eliminar empleado</h4></a>
  <a href="http://joseavila96.epizy.com/InsertData/update_data.php"><h4>Modificar empleado</h4></a>
  <br>

    <table border="1">
      <tr>
        <td>Clave empleado</td>
        <td>Nombre</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Fecha de nacimiento</td>
        <td>Departamento</td>
        <td>Sueldo</td>
      </tr>

      <?php
        $sql="SELECT * from  empleados";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
      ?>

      <tr>
        <td><?php echo $mostrar["Clave_Emp"] ?></td>
        <td><?php echo $mostrar["Nombre"] ?></td>
        <td><?php echo $mostrar["ApPaterno"] ?></td>
        <td><?php echo $mostrar["ApMaterno"] ?></td>
        <td><?php echo $mostrar["FecNac"] ?></td>
        <td><?php echo $mostrar["Departamento"] ?></td>
        <td><?php echo $mostrar["Sueldo"] ?></td>
      </tr>

      <?php
    }
      ?>

    </table>
    <br>

    <a href="http://joseavila96.epizy.com/tabla/tabla_departamentos.php"><h4>Mostrat tabla de departamentos</h4></a>



  </body>
</html>
