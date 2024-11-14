
<!--Esta pagina sirve para captar los datos del formulario registro y guardarlo en la base de datos-->

<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios (nombre_completo, email, usuario, contrasena) 
Values('$nombre_completo','$correo','$usuario','$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario Almacenado Correctamente");
    window.location - "../index.php";
     </script>
    ';
}else{
    echo '
    <script>
    alert("Intentalo de nuevo, usuario no almacenado");
    window.location - "../index.php";
     </script>
    ';
}

mysqli_close($conexion);


?>