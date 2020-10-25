<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function Conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			//self::$conexion= new PDO('mysql:host=localhost;dbname=groupt_probabilistico','groupt_consultor','consultores2020',$pdo_options);
			self::$conexion= new PDO('mysql:host=localhost;dbname=probabilistico','root','',$pdo_options);
			return self::$conexion;
		}	
		
		static function CerrarConexion(&$conn) {
			$conn=null;
		}
    }
    
	$Db=Db::Conectar(); 
	
?>