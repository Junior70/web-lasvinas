<?php
//  ======== conexion a nuestra base de datos ==========
$serverName = "localhost";
$userName = "root"; //root
$password = "";
$dbName = "web";
//$dbName = "cursoprogramacion";

// ======= crear la conexion =======
try{
	$conn = mysqli_connect($serverName, $userName, $password, $dbName);

}catch (Exception $e)  {
	// ======= chequear la conexion ========
//if (!$conn) {
	$data = array("error" => '3','msn' => $e->getMessage());
	die(json_encode($data));
//}
}



?>