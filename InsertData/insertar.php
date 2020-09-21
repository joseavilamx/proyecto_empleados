<?php

  $conexion=mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
    //include("conexion.php");

    if(isset($_POST['Nombre']) && !empty($_POST['Nombre']) &&
       isset($_POST['ApPaterno']) && !empty($_POST['ApPaterno']) &&
       isset($_POST['ApMaterno']) && !empty($_POST['ApMaterno']) &&
       isset($_POST['FecNac']) && !empty($_POST['FecNac']) &&
       isset($_POST['Departamento']) && !empty($_POST['Departamento']) &&
       isset($_POST['Sueldo']) && !empty($_POST['Sueldo'])) {

         $con = mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
         //$con = mysqli_connect($host,$user,$pw,$db);
         mysqli_query($con,("INSERT INTO empleados (Nombre, ApPaterno, ApMaterno, FecNac,Departamento, Sueldo) VALUES ('$_POST[Nombre]','$_POST[ApPaterno]','$_POST[ApMaterno]','$_POST[FecNac]','$_POST[Departamento]','$_POST[Sueldo]')"));

         echo "Empleado Registrado. Va a ser redirigido a la tabla de empleados";
         header("refresh:2; url=http://joseavila96.epizy.com/");

      }else {
         echo "Error al Registrar empleado";
       }

 ?>
