<?php
    class nosotros_modelo{
        private $db;
        private $nosotros;


        public function __construct(){
            $this->db=Conectar::conexion();
        ////$this->productos=array();
        }
        

        public function nosotros_texto(){

            $nosotros=$this->db->query("SELECT texto FROM textos WHERE nombre_texto = 'nosotros';");
            return $nosotros;
        }

    }

?>