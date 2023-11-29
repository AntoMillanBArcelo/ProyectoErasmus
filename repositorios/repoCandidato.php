<?php

class repoCandidato 
{
    private $con;
        
    public function __construct($con) 
    {
        $this->con = $con;
    }

    public function getCandidatos() 
    {
        $conn = $this->con->getConnection();
        $query = "SELECT * FROM candidatos";
        $result = $conn->query($query);
        $candidatos = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) 
            {
                $candidatos[] = $row;
            }
        }

        return $candidatos;
    }

    public function getCandidatoByDNI($dni) 
    {
        $conn = $this->con->getConnection();
        $dni = $conn->real_escape_string($dni);
        $query = "SELECT * FROM candidatos WHERE DNI = '$dni'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function addCandidato($candidatoData) 
    {
        $conn = $this->con->getConnection();

        // Asegurar datos antes de la inserción para evitar inyección SQL
        $dni = $conn->real_escape_string($candidatoData['DNI']);
        $fechaNacimiento = $conn->real_escape_string($candidatoData['fecha_nacimiento']);
        // ... agregar el resto de los campos según tu estructura de datos

        $query = "INSERT INTO candidatos (DNI, fecha_nacimiento, tutor_dni, apellido1, apellido2, nombre, contraseña, curso, tlf, correo, domicilio, rol) 
                  VALUES ('$dni', '$fechaNacimiento', '{$candidatoData['tutor_dni']}', '{$candidatoData['apellido1']}', '{$candidatoData['apellido2']}', 
                          '{$candidatoData['nombre']}', '{$candidatoData['contraseña']}', '{$candidatoData['curso']}', '{$candidatoData['tlf']}', 
                          '{$candidatoData['correo']}', '{$candidatoData['domicilio']}', '{$candidatoData['rol']}')";

        return $conn->query($query);
    }

    public function insertRegister($correo, $contrasena, $fechaNacimiento, $dni, $tutorDni, $apellido1, $apellido2, $nombre, $curso, $telefono, $domicilio) 
    {
    $conn = $this->con->getConnection();
    $query = $conn->prepare("INSERT INTO candidatos (correo, contrasena, fecha_nacimiento, DNI, tutor_dni, apellido1, apellido2, nombre, curso, tlf, domicilio) 
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $query->bind_param($correo, $contrasena, $fechaNacimiento, $dni, $tutorDni, $apellido1, $apellido2, $nombre, $curso, $telefono, $domicilio);
    $result = $query->execute();
    $query->close();

    return $result;
    }
   

}
?>
