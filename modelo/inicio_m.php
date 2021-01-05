<?php
    class inicio_modelo{
        private $db;
        private $productos;
        private $destacados;
        private $texto_destacados;


        public function __construct(){
            $this->db=Conectar::conexion();
        ////$this->productos=array();
        }
        
        public function inicio_productos(){

            $productos=$this->db->query("SELECT * FROM productos;");
            return $productos;
        }

        public function inicio_destacados(){

            $destacados=$this->db->query("SELECT * FROM productos WHERE destacado = 1;");
            return $destacados;
        }

        public function destacados_texto(){

            $texto_destacados=$this->db->query("SELECT texto FROM textos WHERE nombre_texto = 'destacados';");
            return $texto_destacados;
        }
        

    }

?>
