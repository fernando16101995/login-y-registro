
<!--Esta pagina sirve para la conexion hacia la base de datos-->

<?php
    $conexion = mysqli_connect("localhost","root","","login_register_db");
   
    /*
    if($conexion){
        echo 'conectado exitosamente a la base de datos';
    }else{
        echo 'no se ha podido conectar a la base de datos';
    }
    */

?>