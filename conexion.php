<?php
    class Conectar {
            public static function conexion(){
                $db=new mysqli('localhost','root','admin','PielCanela');
                $db->query("SET NAMES 'utf8'");
                return $db;
            }

    }
?>
