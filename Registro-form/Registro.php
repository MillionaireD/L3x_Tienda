<?php
include 'db.php'; // Asegúrate de que este archivo exista en el mismo directorio

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    // Verifica si las contraseñas coinciden
    if ($contraseña !== $confirmar_contraseña) {
        die("Las contraseñas no coinciden.");
    }

    // Hash de la contraseña
    $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

    // Verifica si el correo ya existe
    $sql_check = "SELECT * FROM Usuarios WHERE correo_electrónico = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $correo_electronico);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        die("El correo electrónico ya está registrado.");
    }

    // Inserta el nuevo usuario en la base de datos
    $sql_insert = "INSERT INTO Usuarios (nombre, correo_electrónico, contraseña, dirección, teléfono) VALUES (?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sssss", $nombre, $correo_electronico, $contraseña_hashed, $direccion, $telefono);

    if ($stmt_insert->execute()) {
        header("Location: ../login-form/Login.php");
        exit();
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    $stmt_insert->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro - L3x TecnoShop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/Balck.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="">
                    <span class="login100-form-title p-b-53">
					<h1 style="text-align: center;">Registro</h1>
                    <h2 style="text-align: center;"><span style="color: red;"><a href="../index.php" style="text-decoration: none; color: red;">L3x TecnoShop</a></span></h2>


                    </span>

                    <a href="https://www.facebook.com" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="#" class="btn-google m-b-20">
                        <img src="images/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">Nombre</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Nombre es requerido">
                        <input class="input100" type="text" name="nombre" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">Correo Electrónico</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Correo electrónico válido es requerido: ex@abc.xyz">
                        <input class="input100" type="email" name="correo_electronico" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">Contraseña</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Contraseña es requerida">
                        <input class="input100" type="password" name="contraseña" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">Repite la Contraseña</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Contraseña es requerida">
                        <input class="input100" type="password" name="confirmar_contraseña" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">Dirección</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Dirección es requerida">
                        <input class="input100" type="text" name="direccion" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">Teléfono</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Teléfono es requerido">
                        <input class="input100" type="text" name="telefono" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">Registrarse</button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">Ya tienes una cuenta?</span>
                        <a href="/login-form/Login.php" class="txt2 bo1">Ingresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>
