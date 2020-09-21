<?php

  $conexion=mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //include("conexion.php");

  $Clave = $_POST['Clave_Emp'];

  $con = mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //$con = mysqli_connect($host,$user,$pw,$db);
  mysqli_query($con,("DELETE FROM empleados WHERE Clave_Emp = $Clave"));
  echo "Empleado eliminado Correctamente. Va a ser redirigido a la tabla de empleados";
  header("refresh:2; url=http://joseavila96.epizy.com/");

 ?>
