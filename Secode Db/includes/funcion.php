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

            case 'acceso_user':
            acceso_user();
            break;         

    }
}


function editar_registro() {
    $conexion = mysqli_connect("localhost","root","","prueba");
    extract($_POST);
    $consulta="UPDATE usuarios SET id = '$id', Nombres = '$Nombres', Apellidos = '$Apellidos',
    Genero ='$Genero', Telefono = '$Telefono' WHERE id = '$id' ";

    mysqli_query($conexion, $consulta);
    header('Location: ../views/tablero.php');

}

function eliminar_registro() {
    $conexion = mysqli_connect("localhost","root","","prueba");
    extract($_POST);
    $id = $_POST['id'];
    $consulta= "DELETE FROM usuarios WHERE id= $id ";

    mysqli_query($conexion, $consulta);

    header('Location:../views/tablero.php');

}
