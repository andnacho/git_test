<?php

require_once ('Model/setup.php');

class Conectar
{
    public static function conexion()
    {
        try{
            $conection = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_DATOS, DB_USER, DB_PASS);
            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conection->exec("SET CHARACTER SET utf8");
        }catch (PDOException $e){
            die("Error en " . $e->getLine());
        }

        return $conection;

    }
}