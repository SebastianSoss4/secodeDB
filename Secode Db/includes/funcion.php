<?php

require_once ("../includes/bd.php");

if (isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'editar_registro':
            editar_registro();
                break;

            case 'eliminar_registro':
            eliminar_registro();

            break;        

    }
}


function editar_registro() {
    $conexion = mysqli_connect("localhost","root","","id16455213_secode_qr");
    extract($_POST);
    $consulta="UPDATE usuario SET documento = '$documento', Nombre = '$Nombre', Direccion = '$Direccion',
    Genero ='$Genero', Correo = '$Correo' , FechaNacimiento = '$FechaNacimiento' , Telefono = '$Telefono' WHERE documento = '$documento'";

    mysqli_query($conexion, $consulta);
    header('Location: ../views/tablero.php');

}

function eliminar_registro() {
    $conexion = mysqli_connect("localhost","root","","id16455213_secode_qr");
    extract($_POST);
    $documento= $_POST['documento'];
    $consulta= "DELETE FROM usuario WHERE documento= $documento";
    mysqli_query($conexion, $consulta);

    header('Location: ../views/tablero.php');

}
