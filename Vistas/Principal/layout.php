<?php
    session_start();
    $con = db::obtenerConexion();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    
</head>

<body>
    <?php
        require_once 'header.php';
    ?>
    <section>
        <div id="cuerpo">
        <?php
           require_once 'enruta.php';
        ?>
        </div>
    </section>

    <?php
        require_once 'footer.php';
    ?>

</body>

</html>