<?php
class Principal
{
    public static function main()
    {
        require_once './cargador/Autocargador.php';
        require_once './Vistas/Principal/layout.php';
    }
}
Principal::main();
?>
