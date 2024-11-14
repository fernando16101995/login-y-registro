<!--Esta pagina es para ver los horarios disponibles-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Aula</title>
    <link rel="stylesheet" href="assets/css/estilos_horarios.css">
</head>
<body>
    <div class="contenedor__horarios">
        <form action="">
        <h2>Reserva de Aula</h2>
        <div id="horarios">
            <!-- Aquí se mostrarán las horas disponibles -->
            <div class="time-slot" data-hour="07:00">07:00 - 08:00</div>
            <div class="time-slot" data-hour="08:00">08:00 - 09:00</div>
            <div class="time-slot" data-hour="9:00">09:00 - 10:00</div>
            <div class="time-slot" data-hour="10:00">10:00 - 11:00</div>
            <div class="time-slot" data-hour="12:00">12:00 - 13:00</div>
           
            <div class="time-slot" data-hour="15:00">15:00 - 16:00</div>
            <div class="time-slot" data-hour="16:00">16:00 - 17:00</div>
            <div class="time-slot" data-hour="17:00">17:00 - 18:00</div>
            <div class="time-slot" data-hour="18:00">18:00 - 19:00</div>
            <div class="time-slot" data-hour="19:00">19:00 - 20:00</div>

        </div>
       
         <button id="btn_reservar">Reservar</button>
        <script>
    document.getElementById('btn_reservar').addEventListener('click', function() {
        alert('Hora reservada');
    
         
    });
</script>

<a href="index.php">
    <input type="button" id="btn_regresar" value="Regresar">
</a>

       

        
      
    </div>
    </form>
    
    <script src="assets/js/script.js"></script>
</body>
</html>