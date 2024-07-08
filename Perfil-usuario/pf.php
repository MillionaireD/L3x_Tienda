<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al login si no está autenticado
    header("Location: ../login-form/Login.php");
    exit();
}

// Configuración de la conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "@Macabro5072001";
$dbname = "tienda_sistemas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar errores de conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar variables para almacenar los datos del usuario
$nombre = '';
$correo = '';
$direccion = '';
$telefono = '';

// Obtener el ID de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Preparar y ejecutar consulta para obtener los datos del usuario
$sql = "SELECT nombre, correo_electrónico, dirección, teléfono FROM Usuarios WHERE ID_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$stmt->bind_result($nombre, $correo, $direccion, $telefono);
$stmt->fetch();

// Cerrar statement y conexión
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - L3x TecnoShop</title>
    <link rel="stylesheet" href="pf.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        body {
            background-color: #000;
            /* Color negro puro en formato hexadecimal */
        }
    </style>
</head>

<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/ios/100/000000/gender-neutral-user.png" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600"><?php echo htmlspecialchars($nombre); ?></h6>
                                    <p>Usuario registrado</p>
                                    <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Información</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Correo Electrónico</p>
                                            <h6 class="text-muted f-w-400"><?php echo htmlspecialchars($correo); ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Teléfono</p>
                                            <h6 class="text-muted f-w-400"><?php echo htmlspecialchars($telefono); ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Dirección</p>
                                            <h6 class="text-muted f-w-400"><?php echo htmlspecialchars($direccion); ?></h6>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="https://www.facebook.com" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://x.com/?lang=es" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="#" id="editButton" class="btn btn-primary mt-4">Editar Perfil</a>
                                    <a href="../logout.php" class="btn btn-danger mt-4">Cerrar Sesión</a>
                                    <form id="editForm" action="editar_perfil.php" method="POST" style="display: none;" class="mt-4">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="correo">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo htmlspecialchars($correo); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo htmlspecialchars($direccion); ?>">
                                        </div>
                                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('editButton').addEventListener('click', function() {
            var form = document.getElementById('editForm');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });
    </script>
</body>

</html>
