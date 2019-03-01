<?php

class conexion
{
    private function __construct(){
        
    }
    
    public static function conectar(){
        try
        {
            $conexion = new Config();
            $pdo = new PDO("$conexion->tipo:host=$conexion->host;dbname=$conexion->dbname",$conexion->user,$conexion->pw,$conexion->opciones);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
}
