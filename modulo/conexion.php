<?php
	class Conexion(){
		public function get_conexion{
			$user="postgreqs";
			$pass="j-0980161816";
			$host="localhost";
			$db="proyecto poo";
        	$conexion =new PDO("pgsql:host=$host;dbname=$db",$user,$pass);
        	return $conexion;
			}
		$pruebacon=new Conexion();
			$con = $pruebacon->get_conexion();
			if ($con){
				echo "se conecto exitosamente";
			}else{
				echo "Error";
		}
	}
?>