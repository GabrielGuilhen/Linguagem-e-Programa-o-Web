<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Conexao
{

    private static $conn = null;

    public static function getConexao()
    {
        if (self::$conn == null) {
            $opcoes = array(
                
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            self::$conn = new PDO(
                "mysql:host=localhost;dbname=patrimonio",
                "root",
                "gb39elgamer",
                $opcoes
            );
        }
        return self::$conn;
    }
}