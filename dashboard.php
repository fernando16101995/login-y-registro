<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Reservas</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <header>
        <h1>Bienvenido, [Nombre del Profesor]</h1>
        <nav>
            <a href="mis_reservas.php">Mis Reservas</a>
            <a href="index.php">Cerrar Sesión</a>
        </nav>
    </header>

    <main>
        <section class="available-schedules">
            <h2>Horarios Disponibles</h2>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7:00 - 8:00</td>
                        <td><button">Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                    </tr>
                    <tr>
                        <td>8:00 - 9:00</td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:00</td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                    </tr>
                    <tr>
                        <td>12:00 - 13:00</td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>15:00 - 16:00</td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                        <td>Ocupado</td>
                        <td>Ocupado</td>
                    </tr>
                    <tr>
                        <td>17:00 - 18:00</td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                    </tr>
                    <tr>
                        <td>19:00 - 20:00</td>
                        <td>Ocupado</td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                        <td><button>Reservar</button></td>
                    </tr>
                    <!-- Más filas de horarios aquí -->
                </tbody>
            </table>
        </section>

        
    </main>
    <script src="assets/js/dasboard.js"></script>
    <footer>
        <p>&copy; 2024 Sistema de Reservas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
