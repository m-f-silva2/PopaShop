<?php  namespace Logica;
/*$servername = "localhost";
$database = "popashop";
$username = "root";
$password = "";

//$Persona= new Persona;
// Create connection
$conn = \mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}
*/
class Conexion{
	public static function conectar(){
		$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
		return $conn;
	}
}
?>