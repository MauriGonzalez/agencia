<?php

    class Conexion
    {
        private function __construct()
        {}//impedimos instancias de Conexion

        static function conectar()
        {
            

            $pdo = new PDO(
                'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
            );
           
            return $pdo;
        }
    }