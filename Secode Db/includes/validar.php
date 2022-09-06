<?php
$conexion=mysqli_connect("localhost", "root", "", "prueba");

if(isset($_POST['registrar'])){

    if(strlen($_POST['id'])>=1 &&  strlen($_POST['Nombres']) >=1 && strlen($_POST['Apellidos']) >=1
     && strlen($_POST['Genero']) >=1 && strlen($_POST['Telefono']) >=1){

        $id = trim($_POST['id']);
        $Nombres = trim($_POST['Nombres']);
        $Apellidos = trim($_POST['Apellidos']);
        $Genero = trim($_POST['Genero']);
        $Telefono = trim($_POST['Telefono']);
       
        $consulta="INSERT INTO usuarios(id, Nombres, Apellidos, Genero, Telefono) VALUES('$id','$Nombres','$Apellidos','$Genero','$Telefono')";

        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);

        header('location: ../views/tablero.php');
     }
      }
?>