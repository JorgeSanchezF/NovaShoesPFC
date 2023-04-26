<?php

class Database
{

    public function conectar()
    {
        $driver = 'mysql';
        $host = 'localhost';
        $port = '3306';
        $user = 'root';
        $password = '';
        $db = 'novashoes';

        $dsn   = "$driver:dbname=$db;host=$host;port=$port";

        try {
            $gbd = new PDO($dsn, $user, $password);
            echo 'Conectado corectamente';
        } catch (Exception $e) {

            echo 'Fallo la conexion' . $e->getMessage();
        }

        return $gbd;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM zapatillas";
        $resultado = self::conectar()->query($sql);
        return $resultado;
    }
    public function contar()
    {
        $sql = "SELECT count(nombre) FROM zapatillas";
        $resultado = self::conectar()->query($sql);
        return $resultado;
    }
    public function getClientes()
    {
        $sql = "SELECT * FROM clientes";

        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    public function getProveedores()
    {
        $sql = "SELECT * FROM proveedor";

        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
}
