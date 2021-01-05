<?php
//require_once("conexion.php");
    class productos_modelo{
        private $db;
        private $productos;
        private $hombre;
        private $mujer;
        private $categorias;
        private $nom_categoria;
        private $producto;

        public function __construct(){
            $this->db=Conectar::conexion();
        ////$this->productos=array();
        }
        
        public function get_productos(){

            $productos=$this->db->query("SELECT * FROM productos WHERE disponible = 1;");
            return $productos;
        }
        
        public function get_hombre(){

            $hombre=$this->db->query("SELECT * FROM productos WHERE categoria = 2 OR categoria2 = 2;");
            return $hombre;
        }
        public function get_mujer(){

            $mujer=$this->db->query("SELECT * FROM productos WHERE categoria = 1 OR categoria2 = 1;");
            return $mujer;
        }
        public function nombre_categoria($var){

            $nom_categoria=$this->db->query("SELECT nombre AS nombre_categoria FROM categorias where cod_categoria=$var;");
            return $nom_categoria;
        }


        public function get_categorias(){

            $categorias=$this->db->query("SELECT * FROM categorias");
            return $categorias;
        }

        public function get_productoCat($var){

            $producto=$this->db->query("SELECT * FROM productos WHERE categoria = $var OR categoria2 = $var;");
            return $producto;
        }
    }

?>


