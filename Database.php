<?php

    class Database{

        public function conectar(){
            $driver = 'mysql';
            $host = 'localhost';
            $port = '3306';
            $user = 'root';
            $password = '';
            $db = 'novashoes';

            $dsn   = "$driver:dbname=$db;host=$host;port=$port";

            try {
                $gbd = new PDO($dsn, $user, $password);
               // echo 'Conectado correctamente';
            } catch (Exception $e) {
                echo 'Fallo la conexión: ' . $e->getMessage();
            }

            return $gbd;
        }

        //Parte para sacar las tablas
        public function getAll(){
            $sql = "SELECT * FROM zapatillas";
            $resultado = $this->conectar()->query($sql);
            return $resultado;
        }
        
        public function contar(){
            $sql = "SELECT count(nombre) FROM zapatillas";
            $resultado = $this->conectar()->query($sql);
            return $resultado;
        }
        
        public function getClientes(){
            $sql = "SELECT * FROM usuarios";
            $resultado = $this->conectar()->query($sql);
            return $resultado;
        }
        
        public function getProveedores(){
            $sql = "SELECT * FROM proveedor";
            $resultado = $this->conectar()->query($sql);
            return $resultado;
        }

        //Parte para hacer el login
        public function login($email, $password){
            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
            $user = $this->conectar()->query($sql);

            if ($user != null) {
                return $user->fetch(PDO::FETCH_ASSOC);
            } else {
                return null;
            }
        }

        public function register($name, $email, $password){
            $sql = "INSERT INTO usuarios (nombre, email, password, rol_id) VALUES ('$name', '$email', '$password', 2)";
            $user = $this->conectar()->exec($sql);

        }

        //Parte para hacer el CRUD
        public function delete($id){
            $sql = "DELETE FROM zapatillas WHERE id = $id";
            $this->conectar()->exec($sql);
        }

        public function save($datos){
            $sql = "INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            $this->conectar()->exec($sql);
        }

        public function findById($id){
            $sql = "SELECT * FROM zapatillas WHERE id = $id";
            $coche = $this->conectar()->query($sql);
            return $coche->fetch(PDO::FETCH_ASSOC);
        }

        public function update($datos){
            $sql = "UPDATE zapatillas SET nombre = '$datos[1]', codigo = '$datos[2]', marca = '$datos[3]', perfil = '$datos[4]' WHERE id = $datos[0]";
            $coche = $this->conectar()->query($sql);
            return $coche->fetch(PDO::FETCH_ASSOC);
        }

        public static function getCesta() {
            $database = new Database(); // Crear instancia de la clase Database
            $sql = "SELECT * FROM cesta";
            $resultado = $database->conectar()->query($sql);
            return $resultado;
        }

        public static function borrarDeCesta($id){
            $database = new Database();
            $sql = "DELETE FROM cesta WHERE idProducto = $id";
            $database->conectar()->exec($sql);
        }

        public static function meterACesta($datos){
            $database = new Database();
            $sql = "INSERT INTO cesta (nombreProducto, precioProducto) VALUES ('$datos[1]','$datos[2]')";
            $database->conectar()->query($sql);
        }

        public static function sumarPrecio(){
            $database = new Database();
            $sql = "SELECT sum(precioProducto) AS precioTotal FROM cesta";
            $resultado = $database->conectar()->query($sql);
            return $resultado->fetch(PDO::FETCH_ASSOC)['precioTotal'];
        }
    }

?>