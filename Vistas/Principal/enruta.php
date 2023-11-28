<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once './Vistas/Principal/inicio.php';
    }
    if ($_GET['menu'] == "login") {
        require_once './Vistas/Principal/login.php';
    }
    if ($_GET['menu'] == "register") {
        require_once './Vistas/Principal/register.php';
     
    }
    if ($_GET['menu'] == "mantenimiento") {
        require_once './Vistas/mantenimiento/mantenimiento.php';
     
    }
    if ($_GET['menu'] == "listadoanimales") {
        require_once './Vistas/Mantenimiento/listadoanimales.php';
     
    }
    if ($_GET['menu'] == "listadovacunas") {
        require_once './Vistas/Mantenimiento/listadovacunas.php';
     
    } 
}
else
{
    require_once './Vistas/Principal/inicio.php';
}
    
    //Añadir otras rutas
