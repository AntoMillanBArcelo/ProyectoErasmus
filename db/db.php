<?php
    class db
    {
        private static $conexion = null;
        
        public static function obtenerConexion() 
        {
            if (self::$conexion === null) 
            {
                self::$conexion = new PDO('mysql:host=localhost;dbname=erasmus', 'root', '');
            }
            return self::$conexion;
        }
    }
?>    
