<?php

  $conexion=mysqli_connect('sql306.epizy.com','epiz_26788298','v6Xm7N0AdsiM','epiz_26788298_proyecto_empresa');
  //include("conexion.php");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <title>Departamentos</title>
   </head>

   <body>

   <h2>Departamentos</h2>

     <table border="1">
       <tr>
         <td>puesto</td>
         <td>Descripcion</td>
       </tr>

       <?php
         $sql="SELECT * from  departamentos";
         $result=mysqli_query($conexion,$sql);

         while($mostrar=mysqli_fetch_array($result)){
       ?>

       <tr>
         <td><?php echo $mostrar["puesto"] ?></td>
         <td><?php echo $mostrar["Descripcion"] ?></td>
       </tr>

       <?php
     }
       ?>

     </table>
     <br>

     <a href="http://joseavila96.epizy.com/"><h4>Regresar a tabla de empleados</h4></a>



   </body>
 </html>
