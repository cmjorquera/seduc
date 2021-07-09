<?php

//opcion 1 

$enlace = mysqli_connect("localhost", "root", "", "comun");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conectado" . PHP_EOL;
// echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);


// opcion 2 --->  NO FUNCIONO 
// class Database{
// 		private $con;
// 		private $dbhost="localhost";
// 		private $dbuser="root";
// 		private $dbpass="";
// 		private $dbname="comun";   // Nombre de la base de datos
// 		function __construct(){
// 			$this->connect_db();
// 		}
// 		public function connect_db(){
// 			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
// 			if(mysqli_connect_error()){ 
// 				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
// 			}
// 		}
// }
?>