<?php
$documento= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "id16455213_secode_qr");
$consulta= "SELECT * FROM usuario WHERE documento = $documento";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion SECODE</title>

	<link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">
    <form action="../includes/funcion.php" method="POST">
        <div id="login">
            <div class="container"> 
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class ="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="documento" class="form-label">Documento</label><br>
                                <input type="text" id="documento" name="documento" class="form-control" value ="<?php echo $usuario["documento"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="Nombre">Nombre completos</label><br>
                                <input type="text" id="Nombre" name="Nombre" class="form-control"  placeholder="Nombres de usuario" value ="<?php echo $usuario["Nombre"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="Direccion" class="form-label">Direccion</label><br>
                                <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="Direccion" value ="<?php echo $usuario["Direccion"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="Genero" class="form-label">Genero</label><br>
                                <input type="text" id="Genero" name="Genero" class="form-control" placeholder="Genero usuario" value ="<?php echo $usuario["Genero"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="form-label">Correo</label><br>
                                <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Correo usuario" value ="<?php echo $usuario["Correo"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="FechaNacimiento" class="form-label">FechaNacimiento</label><br>
                                <input type="date" id="FechaNacimiento" name="FechaNacimiento" class="form-control" placeholder="Fecha de nacimiento usuario" value ="<?php echo $usuario["FechaNacimiento"]; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="Telefono" class="form-label">Telefono</label><br>
                                <input type="Telefono" name="Telefono" id="Telefono" class="form-control" placeholder="Telefono" value ="<?php echo $usuario["Telefono"]; ?>"required>
                                <input type="hidden" name="accion" value = "editar_registro">
                            </div>
                            <br>
                            <div class="mb-3">
                                    
                                    <button type="submit" class="btn btn-success" >Editar</button>
                                   <a href="tablero.php" class="btn btn-danger">Cancelar</a>
                                   
                                </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </form>
               
</body>
</html>