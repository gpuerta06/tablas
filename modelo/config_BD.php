<?php
class Database
{
    //Función para conectar con la base de datos
    //
    //Recuerde colocar el usuario y clave asociado a su admin de base de datos
    
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=jugadores', 'root', '1mpr3nt4');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    
}
