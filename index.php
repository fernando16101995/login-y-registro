
<!--Esta pagina es la pagina principal de todo el documento, aqui se aprecian los formularios login y register-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
 
<main>

    <div class="contenedor__todo">


    <div class="caja__trasera"> <!--abre div caja trasera-->
        <div class="caja__trasera-login">  <!--abre div caja trasera login--> 
            <h3>¿ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la pagina</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div> <!--cierra div caja trasera login-->

        <div class="caja__trasera-register"> <!--abre div caja trasera register--> 
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Registrate para que puedas iniciar sesión</p>
            <button id="btn__registrarse">Registrarse</button>
        </div>  <!--cierra div caja trasera register-->  
    </div> <!--cierra div caja trasera--> 


    <!--Formulario login y registro-->
    <div class="contenedor__login-register">

        <!--Formulario login -->
        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <button>Entrar</button>
        </form>

        <!--Formulario Registro -->
        <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="text" placeholder="Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="contrasena">
        <button>Registrarse</button>
        </form>

    </div><!--Cierra dic contenedor login register-->

    </div> <!--cierra div contenedor todo--> 

</main>

<script src="assets/js/script.js"></script>
</body>
</html>
