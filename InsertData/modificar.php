<?php

  $conexion=mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //include("conexion.php");

  $Clave = $_POST['Clave_Emp'];
  $Nombre = $_POST['Nombre'];
  $ApPaterno = $_POST['ApPaterno'];
  $ApMaterno = $_POST['ApMaterno'];
  $FecNac = $_POST['FecNac'];
  $Departamento = $_POST['Departamento'];
  $Sueldo = $_POST['Sueldo'];

  $con = mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //$con = mysqli_connect($host,$user,$pw,$db);
  mysqli_query($con,("UPDATE empleados SET Nombre='$Nombre', ApPaterno='$ApPaterno', ApMaterno='$ApMaterno', FecNac='$FecNac', Departamento='$Departamento', Sueldo='$Sueldo'
  WHERE Clave_Emp='$Clave'"));

  echo "El registro se ha modificado correctamente. Va a ser redirigido a la tabla de empleados";
  header("refresh:2; url=http://joseavila96.epizy.com/");

 ?>
