<?php

class Message
{
    protected $db;
    protected $mensajes;

    public function __construct()
    {
        require_once ("Model/Conectar.php");
        $this->db = Conectar::conexion();
    }

    public function getMessage()
    {
        $consulta = "SELECT * FROM messages";

        $prepared = $this->db->prepare($consulta, ['PDO_ATTR_CURSOR' => ' PDO::ATTR_CURSOR ']);

        $prepared->execute();

        $this->mensajes = $prepared->fetchAll();

        return $this->mensajes;

    }

}