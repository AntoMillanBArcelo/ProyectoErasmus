<?php
$con = db::obtenerConexion();

if (isset($_POST['Registrarse'])) 
{
    $val = new Validacion;
    $correo = $_POST['correo'];

    // Validar el correo electrónico y la longitud de la contraseña
    if ($val->Email('correo') && $val->CadenaRango('contrasena', 20, 6)) 
    {
        $contrasena = $_POST['contrasena'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $dni = $_POST['dni'];
        $tutorDni = $_POST['tutorDni'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $nombre = $_POST['nombre'];
        $curso = $_POST['curso'];
        $telefono = $_POST['telefono'];
        $domicilio = $_POST['domicilio'];

        $rCandidato = new repoCandidato($con);
        $rCandidato->insertRegister($correo, $contrasena, $fechaNacimiento, $dni, $tutorDni, $apellido1, $apellido2, $nombre, $curso, $telefono, $domicilio);
        header('Location: ?menu=login');
        exit();
    } 
    else 
    {
        // Mostrar mensaje de error correspondiente
        if (!$val->Email('correo')) 
        {
            echo "<p class='error'>El correo no es válido. Por favor, introduce uno válido.</p>";
        } 
        elseif (!$val->CadenaRango('contrasena', 20, 6)) 
        {
            echo "<p class='error'>La contraseña debe tener entre 7 y 20 caracteres.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/styleRegistro.css">
</head>
<body>
    <div class="containerr">
        <div class="left"></div>
        <div class="right">
            <h1>REGISTRO</h1>
            <form method="post" action="">
                <label for="correo">Correo Electrónico:</label><br>
                <input type="email" id="correo" name="correo" maxlength="50" required><br>

                <label for="correo">Fecha de nacimiento:</label><br>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br>

                <label for="dni">DNI:</label><br>
                <input type="text" id="dni" name="dni"><br>

                <label for="tutorDni">DNI de un tutor legal:</label><br>
                <input type="text" id="tutorDni" name="tutorDni"><br>

                <label for="apellido1">Primer apellido:</label><br>
                <input type="text" id="apellido1" name="apellido1"><br>

                <label for="apellido2">Segundo apellido:</label><br>
                <input type="text" id="apellido2" name="apellido2"><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>

                <label for="tutorDni">DNI de un tutor legal:</label><br>
                <input type="text" id="tutorDni" name="tutorDni"><br>

                <label for="contrasena">Contraseña:</label><br>
                <input type="password" id="contrasena" name="contrasena" maxlength="50" required><br>

                <label for="curso">Curso:</label><br>
                <input type="text" id="curso" name="curso"><br>

                <label for="telefono">Telefono:</label><br>
                <input type="text" id="telefono" name="telefono"><br>

                <label for="domicilio">Domicilio:</label><br>
                <input type="text" id="domicilio" name="domicilio"><br>

                <p>¿Ya tienes una cuenta? <a href="?menu=login">Iniciar Sesión</a></p>
                <input type="submit" value="Registrarse" name="Registrarse">
            </form>
        </div>
    </div>
</body>
</html>
