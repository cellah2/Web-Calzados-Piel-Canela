<?php
    class producto_modelo{
        private $db;
        private $productos;


        public function __construct(){
            $this->db=Conectar::conexion();
        ////$this->productos=array();
        }
        
        public function get_producto($cod){

            $productos=$this->db->query("SELECT * FROM productos WHERE cod_prod = '$cod';");
            return $productos;
        }

    }
?>

