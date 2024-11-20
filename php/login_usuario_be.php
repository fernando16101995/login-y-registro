
<!--esta pagina sirve para validar al usuario en el login, entra a la base de datos para saber si existe y darle acceso-->
<?php



include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0 ){
    // Iniciar sesión y guardar el correo en $_SESSION
    $_SESSION['correo'] = $correo;
    header("location: ../dashboard.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos");
   window.location = "../index.php";
    </script>
    ';
    exit;
}


?>


